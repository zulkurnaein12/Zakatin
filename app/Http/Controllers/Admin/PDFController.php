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
        $zakats = Pembayaran::all();
        $totalBeras = Pembayaran::sum('total_beras');
        $totalUang = Pembayaran::sum('total_uang');
        view()->share('zakats', $zakats);
        $pdf = PDF::loadView('pembayaran', compact('totalBeras', 'totalUang'));
        return $pdf->download('laporan_pembayaran_zakat.pdf');
    }
}
