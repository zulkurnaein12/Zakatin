<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penerimaan;
use Illuminate\Http\Request;
use PDF;

class PDFpenerimaanController extends Controller
{
    public function exportPDF()
    {
        // Mendapatkan tanggal saat ini
        $endDate = date('Y-m-d');

        // Mengurangi 4 hari dari tanggal saat ini untuk mendapatkan tanggal awal
        $startDate = date('Y-m-d', strtotime('-4 days', strtotime($endDate)));

        // Dapatkan data pembayaran zakat berdasarkan rentang tanggal
        $zakats = Penerimaan::whereBetween('created_at', [$startDate, $endDate])->get();

        // Hitung total beras dan total uang
        $totalBeras = $zakats->sum('total_beras');
        $totalUang = $zakats->sum('total_uang');

        // Bagikan data ke view 'pembayaran'
        view()->share('zakats', $zakats);

        // Load view 'pembayaran' dan kirimkan data totalBeras dan totalUang ke dalam PDF
        $pdf = PDF::loadView('penerimaan', compact('totalBeras', 'totalUang'));

        // Unduh file PDF dengan nama 'laporan_pembayaran_zakat.pdf'
        return $pdf->download('laporan_penyaluran_zakat.pdf');
    }
}
