<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

class Login extends Controller
{
    public function index()
    {
        return view('Login');
    }
    public function Register(Request $request)
    {
        DB::table('tbl_user')->insert([
        'nama_user' => $request->nama,
        'email' => $request->email,
        'password' => $request->password
      ]);
        echo "<script>alert('Selamat anda berhasil mendaftar, Silahkan Login');
        window.location.href='/login';
        </script>";
    }
    public function Masuk(Request $request)
    {
        $user = DB::table('tbl_user')->where('email', $request->email)->first();
        if ($user->password == $request->password) {
            Session::put('id_user', $user->id);
            echo 'Data disimpan dengan session id = '.$request->session()->get('id');
            return redirect('/');
        } else {
            echo "<script>alert('Maaf password anda salah');
            window.location.href='/login';
            </script>";
        }
    }
    public function Keluar()
    {
        Session::forget('id_user');
        return redirect('/');
    }
}
