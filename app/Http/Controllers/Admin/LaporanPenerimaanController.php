<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mustahiq;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use Illuminate\Http\Request;

class LaporanPenerimaanController extends Controller
{
    public function index()
    {
        $zakats = Penerimaan::orderBy('created_at', 'desc')->get();
        $totalBeras = Pembayaran::sum('total_beras');
        $totalUang = Pembayaran::sum('total_uang');
        $mustahiqs = Mustahiq::all();
        return view('admin.laporan.laporan_penerimaan', ['zakats' => $zakats, 'totalBeras' => $totalBeras, 'totalUang' => $totalUang, 'mustahiqs' => $mustahiqs]);
    }
}
