<?php

namespace App\Http\Controllers\Pengurus;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class ZakatMaalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zakats = Pembayaran::where('jenja', 'Zakat Maal')->orderBy('created_at', 'desc')->get();
        $total = Pembayaran::sum('total_uang');
        $title = 'Hapus Pembayaran!';
        $text = "Apakah Anda Yakin Menghapus Data?";
        confirmDelete($title, $text);
        return view('pengurus.pembayaran.zakat_maal.index', ['zakats' => $zakats, 'total' => $total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengurus.pembayaran.zakat_maal.create');
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
            'nama' => 'required|string',
            'jenja' => 'required',
            'total_uang' => 'required',
            'ket' => 'nullable',
        ]);
        $data['user_id'] = auth()->user()->id;
        $zakat = Pembayaran::create($data);
        alert()->success('Succes', 'Pembayaran Zakat Maal Berhasil');
        return redirect()->route('pengurus.zakatmaal.index', compact('zakat'));
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
        return view('pengurus.pembayaran.zakat_maal.edit', compact('zakat'));
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
            'total_uang' => 'required',
            'ket' => 'nullable',
        ]);
        $zakat = Pembayaran::find($id);
        $zakat->update($data);
        alert()->success('Succes', 'Pembayaran Berhasil Di Perbaharui');
        return redirect()->route('pengurus.zakatmaal.index');
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
        return redirect()->route('pengurus.zakatmaal.index');
    }
}
