<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Alert;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = User::where('role',2)->get();
        return view('dashboard.users',compact(['users']));
    }

    public function postUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gambar' => 'required|file|image|mimes:png,jpg,jpeg'
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'user';
            $gambar->move($tujuan_upload,$nama_gambar);
        }

        $user = User::create([
            'name'=> $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->email),
            'gambar' => $nama_gambar,
            'role' => 2
        ]);

        Alert::success('success','Berhasil menambah admin');
        return back();
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' =>  'required|email'
        ]);

        $user = User::find($request->id);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_".$gambar->getClientOriginalName();
            $tujuan_upload = 'user';
            $gambar->move($tujuan_upload,$nama_gambar);
        }else {
            $nama_gambar = $user->gambar;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'gambar' => $nama_gambar
        ]);

        Alert::success('success','Berhasil mengupdate profil');

        return back();

    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required'
        ]);

        $user = User::find(auth()->user()->id);
        $user->update([
            'password' => bcrypt($request->password)
        ]);

        Alert::success('success','Berhasil mengupdate password');

        return back();
    }

    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('dashboard.profile',compact(['user']));
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
