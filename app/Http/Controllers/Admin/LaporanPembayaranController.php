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
        $zakats = Pembayaran::all();
        $totalBeras = Pembayaran::sum('total_beras');
        $totalUang = Pembayaran::sum('total_uang');
        return view('admin.laporan.laporan_pembayaran', ['zakats' => $zakats, 'totalBeras' => $totalBeras, 'totalUang' => $totalUang]);
    }
}
