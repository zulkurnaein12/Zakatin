<?php

namespace App\Http\Controllers\Pengurus;

use App\Http\Controllers\Controller;
use App\Models\Mustahiq;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use App\Models\User;
use Illuminate\Http\Request;

class PenerimaanZakatMaalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zakatmaals = Penerimaan::where('jenja', 'Zakat Maal')->get();
        $total = Pembayaran::sum('total_uang');
        $title = 'Hapus Pembayaran!';
        $text = "Apakah Anda Yakin Menghapus Data?";
        confirmDelete($title, $text);
        return view('pengurus.penyaluran.zakat_maal.index', ['zakatmaals' => $zakatmaals, 'total' => $total]);
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
        return view('pengurus.penyaluran.zakat_maal.create', compact('users', 'mustahiqs'));
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
            'total_uang' => 'required',
            'ket' => 'nullable',
        ]);
        $data['user_id'] = auth()->user()->id;
        $data['jenja'] = 'Zakat Maal'; // Set jenis zakat menjadi "Zakat Maal"

        $zakatmaal = Penerimaan::create($data);

        alert()->success('Succes', 'Penyaluran Zakat Maal Berhasil');
        return redirect()->route('pengurus.penerimaanzakatmaal.index', compact('zakatmaal'));
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
        return view('pengurus.penyaluran.zakat_maal.edit', compact('zakat', 'mustahiqs'));
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
            'jenja' => 'required',
            'total_uang' => 'required',
            'ket' => 'nullable',
        ]);
        $zakat = Penerimaan::find($id);
        $zakat->update($data);
        alert()->success('Succes', 'Penyaluran Berhasil Di Perbaharui');
        return redirect()->route('pengurus.penerimaanzakatmaal.index');
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
        return redirect()->route('pengurus.penerimaanzakatmaal.index', compact('zakat'));
    }
}
