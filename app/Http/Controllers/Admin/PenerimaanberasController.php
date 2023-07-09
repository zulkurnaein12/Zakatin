<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mustahiq;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use App\Models\User;
use Illuminate\Http\Request;

class PenerimaanberasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zakats = Penerimaan::where('jenja', 'Zakat Fitrah')->get();
        $mustahiqs = Mustahiq::all();
        $total = Pembayaran::sum('total_beras');
        $title = 'Hapus Pembayaran!';
        $text = "Apakah Anda Yakin Menghapus Data?";
        confirmDelete($title, $text);
        return view('admin.penerimaan.zakat_fitrah.index', ['zakats' => $zakats, 'total' => $total, 'mustahiqs' => $mustahiqs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mustahiqs = Mustahiq::all();
        $zakat = Penerimaan::find($id);
        return view('pengurus.penyaluran.zakat_fitrah.edit', compact('zakat', 'mustahiqs'));
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
        return redirect()->route('admin.penerimaanberas.index');
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
        return redirect()->route('admin.penerimaanberas.index', compact('zakat'));
    }
}
