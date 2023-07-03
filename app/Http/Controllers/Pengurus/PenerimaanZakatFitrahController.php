<?php

namespace App\Http\Controllers\Pengurus;

use App\Http\Controllers\Controller;
use App\Models\Mustahiq;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use App\Models\User;
use Illuminate\Http\Request;

class PenerimaanZakatFitrahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zakats = Penerimaan::where('jenja', 'Zakat Fitrah')->get();
        $total = Pembayaran::sum('total_beras');
        $title = 'Hapus Pembayaran!';
        $text = "Apakah Anda Yakin Menghapus Data?";
        confirmDelete($title, $text);
        return view('pengurus.penyaluran.zakat_fitrah.index', ['zakats' => $zakats, 'total' => $total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::role('pengurus')->get();
        $mustahiqs = Mustahiq::all();
        return view('pengurus.penyaluran.zakat_fitrah.create', compact('users', 'mustahiqs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'mustahiq_id' => 'required',
            'jenja' => 'required',
            'total_beras' => 'required',
            'ket' => 'nullable',
        ]);
        $data['user_id'] = auth()->user()->id;
        $zakat = Penerimaan::create($data);
        alert()->success('Succes', 'Penyaluran Zakat Fitrah Berhasil');
        return redirect()->route('pengurus.penerimaanzakatfitrah.index', compact('zakat'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::role('pengurus')->get();
        $mustahiqs = Mustahiq::all();
        $zakat = Penerimaan::find($id);
        return view('pengurus.penyaluran.zakat_fitrah.edit', compact('zakat', 'users', 'mustahiqs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'mustahiq_id' => 'required',
            'jenja' => 'required',
            'total_beras' => 'required',
            'ket' => 'nullable',
        ]);
        $zakat = Penerimaan::find($id);
        $zakat->update($data);
        alert()->success('Succes', 'Penyaluran Berhasil Di Perbaharui');
        return redirect()->route('pengurus.penerimaanzakatfitrah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zakat = Penerimaan::findOrFail($id);
        $zakat->delete();
        return redirect()->route('pengurus.penerimaanzakatfitrah.index', compact('zakat'));
    }
}
