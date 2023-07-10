<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use Illuminate\Http\Request;

class PDFpenerimaanController extends Controller
{
    public function exportPDF()
    {
        $zakats = Penerimaan::all();
        $totalBeras = Pembayaran::sum('total_beras');
        $totalUang = Pembayaran::sum('total_uang');
        view()->share('zakats', $zakats);
        $pdf = PDF::loadView('penerimaan', compact('totalBeras', 'totalUang'));
        return $pdf->download('laporan_penerimaan_zakat.pdf');
    }
}
