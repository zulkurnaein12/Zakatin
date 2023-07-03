<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Penerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $zakatfit = Pembayaran::sum('total_beras');
        $zakatmaal = Pembayaran::sum('total_uang');
        $penerimaanberas = Penerimaan::sum('total_beras');
        $penerimaanuang = Penerimaan::sum('total_uang');
        $riwayats = Pembayaran::where('user_id', Auth::user()->id)->get();
        return view('muzakki.dashboard', compact('zakatfit', 'zakatmaal', 'penerimaanberas', 'penerimaanuang', 'riwayats'));
    }
}
