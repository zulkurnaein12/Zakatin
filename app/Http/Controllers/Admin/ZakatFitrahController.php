<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class ZakatFitrahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zakats = Pembayaran::where('jenja', 'Zakat Fitrah')->get();
        $total = Pembayaran::sum('total_beras');
        $title = 'Hapus Pembayaran!';
        $text = "Apakah Anda Yakin Menghapus Data?";
        confirmDelete($title, $text);
        return view('admin.zakat.zakat_fitrah.index', ['zakats' => $zakats, 'total' => $total]);
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
        $zakat = Pembayaran::find($id);
        return view('admin.zakat.zakat_fitrah.edit', compact('zakat'));
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
            'nama' => 'required|string',
            'jenja' => 'required',
            'total_beras' => 'required',
            'ket' => 'nullable',
        ]);
        $zakat = Pembayaran::find($id);
        $zakat->update($data);
        alert()->success('Succes', 'Pembayaran Berhasil Di Perbaharui');
        return redirect()->route('admin.zakafitrah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zakat = Pembayaran::findOrFail($id);
        $zakat->delete();
        return redirect()->route('admin.zakafitrah.index');
    }
}
