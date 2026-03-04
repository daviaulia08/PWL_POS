<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::all(); // mengambil semua data dari tabel user   
        return view('user', ['data' => $user]);

    }
    public function tambah()
    {
        return view('user_tambah');
    }
    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password), // mengenkripsi password sebelum disimpan
            'level_id' => $request->level_id
        ]); 

        return redirect('/user'); // mengarahkan kembali ke halaman user setelah menyimpan data
    }
    public function ubah($id)
    {
        $user = UserModel::find($id); // mencari data user berdasarkan id
        return view('user_ubah', ['data' => $user]);
    }
    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id); // mencari data user berdasarkan id
        
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make($request->password); // mengenkripsi password sebelum disimpan
        $user->level_id = $request->level_id;
        $user->save(); // menyimpan perubahan data user

        return redirect('/user'); // mengarahkan kembali ke halaman user setelah menyimpan perubahan
    }
    public function hapus($id)
    {
        $user = UserModel::find($id); // mencari data user berdasarkan id
        $user->delete(); // menghapus data user

        return redirect('/user'); // mengarahkan kembali ke halaman user setelah menghapus data
    }
}
