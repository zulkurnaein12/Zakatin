<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mustahiq;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use Illuminate\Http\Request;

class PenerimaanuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zakats = Penerimaan::where('jenja', 'Zakat Maal')->orderBy('created_at', 'desc')->get();
        $mustahiqs = Mustahiq::all();
        $total = Pembayaran::sum('total_uang');
        $title = 'Hapus Pembayaran!';
        $text = "Apakah Anda Yakin Menghapus Data?";
        confirmDelete($title, $text);
        return view('admin.penerimaan.zakat_maal.index', ['zakats' => $zakats, 'total' => $total, 'mustahiqs' => $mustahiqs]);
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
        return view('admin.penerimaan.zakat_maal.edit', compact('zakat', 'mustahiqs'));
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
            'mustahiq_id' => 'required',
            'total_uang' => 'required',
            'ket' => 'nullable',
        ]);
        $data['jenja'] = 'Zakat Maal';
        $zakat = Penerimaan::find($id);
        $zakat->update($data);
        alert()->success('Succes', 'Penyaluran Berhasil Di Perbaharui');
        return redirect()->route('admin.penerimaanuang.index');
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
        return redirect()->route('admin.penerimaanuang.index', compact('zakat'));
    }
}
