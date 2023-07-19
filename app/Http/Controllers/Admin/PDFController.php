<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{

    public function generatePDF()
    {
        // Mendapatkan tanggal saat ini
        $endDate = date('Y-m-d');

        // Mengurangi 4 hari dari tanggal saat ini untuk mendapatkan tanggal awal
        $startDate = date('Y-m-d', strtotime('-4 days', strtotime($endDate)));

        // Dapatkan data pembayaran zakat berdasarkan rentang tanggal
        $zakats = Pembayaran::whereBetween('created_at', [$startDate, $endDate])->get();

        // Hitung total beras dan total uang
        $totalBeras = $zakats->sum('total_beras');
        $totalUang = $zakats->sum('total_uang');

        // Bagikan data ke view 'pembayaran'
        view()->share('zakats', $zakats);

        // Load view 'pembayaran' dan kirimkan data totalBeras dan totalUang ke dalam PDF
        $pdf = PDF::loadView('pembayaran', compact('totalBeras', 'totalUang'));

        // Unduh file PDF dengan nama 'laporan_pembayaran_zakat.pdf'
        return $pdf->download('laporan_pembayaran_zakat.pdf');
    }
}
