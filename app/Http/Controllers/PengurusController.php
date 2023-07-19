<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Penerimaan;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        $zakats = Penerimaan::all();
        $zakatfit = Pembayaran::sum('total_beras');
        $zakatmaal = Pembayaran::sum('total_uang');
        $penerimaanberas = Penerimaan::sum('total_beras');
        $penerimaanuang = Penerimaan::sum('total_uang');
        return view('pengurus.dashboard', compact('zakatfit', 'zakatmaal', 'penerimaanberas', 'penerimaanuang', 'zakats'));
    }
}
