<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mustahiq;
use Illuminate\Http\Request;

class MustahiqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mustahiqs = Mustahiq::orderBy('created_at', 'desc')->get();
        $title = 'Hapus Mustahiq!';
        $text = "Apakah Anda Yakin Menghapus Data?";
        confirmDelete($title, $text);
        return view('admin.mustahiq.index', compact('mustahiqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mustahiq.create');
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
            'alamat' => 'required',
            'jenkel' => 'required',
            'no_tlp' => 'nullable',
            'kategori' => 'required'
        ]);

        $mustahiq = Mustahiq::create($data);
        alert()->success('Succes', 'Mustahiq Berhasil Di Tambahkan');
        return redirect()->route('admin.mustahiq.index', compact('mustahiq'));
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
        $mustahiq = Mustahiq::find($id);
        return view('admin.mustahiq.edit', compact('mustahiq'));
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
            'alamat' => 'required',
            'jenkel' => 'required',
            'no_tlp' => 'nullable',
            'kategori' => 'required'
        ]);
        $mustahiq = Mustahiq::find($id);
        $mustahiq->update($data);
        alert()->success('Succes', 'Mustahiq Berhasil Di Perbaharui');
        return redirect()->route('admin.mustahiq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mustahiq = Mustahiq::findOrFail($id);
        $mustahiq->delete();
        return redirect()->route('admin.mustahiq.index');
    }
}
