<?php

namespace App\Http\Controllers;

use App\Models\Mustahiq;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $zakats = Penerimaan::all();
        $muzakki = User::role('muzakki')->count();
        $pengurus = User::role('pengurus')->count();
        $mustahiq = Mustahiq::count();
        $zakatfit = Pembayaran::sum('total_beras');
        $zakatmaal = Pembayaran::sum('total_uang');
        $penerimaanberas = Penerimaan::sum('total_beras');
        $penerimaanuang = Penerimaan::sum('total_uang');
        return view('admin.dashboard', compact('muzakki', 'pengurus', 'mustahiq', 'zakatfit', 'zakatmaal', 'penerimaanberas', 'penerimaanuang', 'zakats'));
    }
}
