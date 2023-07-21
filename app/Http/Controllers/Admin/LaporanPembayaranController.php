<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use PDF;
use Illuminate\Http\Request;

class LaporanPembayaranController extends Controller
{
    public function index()
    {
        $zakats = Pembayaran::orderBy('created_at', 'desc')->get();
        $totalBeras = Pembayaran::sum('total_beras');
        $totalUang = Pembayaran::sum('total_uang');
        return view('admin.laporan.laporan_pembayaran', ['zakats' => $zakats, 'totalBeras' => $totalBeras, 'totalUang' => $totalUang]);
    }
    public function filter(Request $request)
    {
        $totalBeras = Pembayaran::sum('total_beras');
        $totalUang = Pembayaran::sum('total_uang');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        // Ambil data zakat berdasarkan rentang tanggal
        $zakats = Pembayaran::whereBetween('created_at', [$start_date, $end_date])->orderBy('created_at', 'desc')->get();

        // Simpan data hasil filter dalam session
        $request->session()->put('zakats', $zakats);
        $request->session()->put('totalBeras', $totalBeras);
        $request->session()->put('totalUang', $totalUang);
        $request->session()->put('start_date', $start_date);
        $request->session()->put('end_date', $end_date);

        return view('admin.laporan.laporan_pembayaran', compact('zakats', 'totalBeras', 'totalUang'));
    }
    public function exportPdf(Request $request)
    {
        // Ambil data dari session
        $zakats = $request->session()->get('zakats');
        $totalBeras = $request->session()->get('totalBeras');
        $totalUang = $request->session()->get('totalUang');
        $start_date = $request->session()->get('start_date');
        $end_date = $request->session()->get('end_date');
        // Load tampilan PDF menggunakan CSS dan HTML
        $pdf = PDF::loadView('pembayaran', compact('zakats', 'totalBeras', 'totalUang', 'start_date', 'end_date'));

        // Tetapkan nama file PDF, Anda dapat menyesuaikan nama sesuai keinginan Anda
        $filename = 'laporan_pembayaran_zakat.pdf';

        // Tetapkan header untuk mengunduh PDF
        return $pdf->download($filename);
    }
}
