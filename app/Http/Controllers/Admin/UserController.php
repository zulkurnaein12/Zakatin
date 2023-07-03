<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::role('pengurus')->get();
        $title = 'Hapus User!';
        $text = "Apakah Anda Yakin Menghapus Data?";
        confirmDelete($title, $text);
        return view('admin.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|string',
                'email' => 'required',
                'avatar' => 'image|nullable',
                'alamat' => 'nullable',
                'jabatan' => 'nullable',
                'no_tlp' => 'required',
                'password' => 'required',
            ]
        );
        $data =  new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->jabatan = $request->jabatan;
        $data->no_tlp = $request->no_tlp;
        $data->password = bcrypt($request->password);
        if ($request->file('avatar')) {
            $file = $request->file('avatar')->store('avatar', 'public');
            $data['avatar'] = $file;
        }
        $data->save();

        $data->assignRole('pengurus');
        alert()->success('Succes', 'Pengurus Berhasil Di Tambahkan');
        return redirect()->route('admin.user.index');
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
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
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
        $data = $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required',
                'avatar' => 'image|nullable',
                'alamat' => 'nullable',
                'jabatan' => 'nullable',
                'no_tlp' => 'required',
            ]
        );
        if ($request->file('avatar')) {
            $file = $request->file('avatar')->store('avatar', 'public');
            $data['avatar'] = $file;
        }
        $user = User::find($id);
        $user->update($data);
        alert()->success('Succes', 'Pengurus Berhasil Di Perbaharui');
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
