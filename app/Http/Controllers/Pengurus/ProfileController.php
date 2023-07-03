<?php

namespace App\Http\Controllers\Pengurus;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::id());
        return view('pengurus.dashboard', compact('user'));
    }


    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string',
            'alamat' => 'required|string',
            'jabatan' => 'required|string',
            'no_tlp' => 'required|max:12',
            'avatar' => 'nullable',
        ]);

        if ($request->file('avatar')) {
            $file = $request->file('avatar')->store('avatar', 'public');
            $data['avatar'] = $file;
        }
        $user->update($data);
        alert()->success('Success', 'Profile has been Updated');
        return redirect()->route('pengrus.profile.index');
    }
}
