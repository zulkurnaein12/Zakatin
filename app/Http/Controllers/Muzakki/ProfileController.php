<?php

namespace App\Http\Controllers\Muzakki;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::id());
        $zakatfit = Pembayaran::sum('total_beras');
        $zakatmaal = Pembayaran::sum('total_uang');
        $penerimaanberas = Penerimaan::sum('total_beras');
        $penerimaanuang = Penerimaan::sum('total_uang');
        $riwayats = Pembayaran::where('user_id', Auth::user()->id)->get();
        return view('muzakki.dashboard', compact('user', 'zakatfit', 'zakatmaal', 'penerimaanberas', 'penerimaanuang', 'riwayats'));
    }


    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string',
            'alamat' => 'required|string',
            'no_tlp' => 'required|max:12',
            'avatar' => 'nullable',
        ]);

        if ($request->file('avatar')) {
            $file = $request->file('avatar')->store('avatar', 'public');
            $data['avatar'] = $file;
        }
        $user->update($data);
        alert()->success('Success', 'Profile has been Updated');
        return redirect()->route('muzakki.profile');
    }
}
