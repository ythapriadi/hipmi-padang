<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('loginadmin.login');
    }

    public function aksi_login(Request $request){
        // Cek Data Login
        $users = new AdminModel();
        $data_users = $users->CheckLoginAdmin($request->input('username'), $request->input('password'));

        if($data_users){
            // masukkan data login ke session
            $request->session()->put('nama_lengkap', $data_users->nama_lengkap);
            $request->session()->put('username', $data_users->username);
            $request->session()->put('password', $data_users->password);
            $request->session()->put('id', $data_users->id);

            return redirect()->route('home');
            }else{
            return redirect()->route('login');
        }
    }

    public function logout (Request $request){
        $request->session()->forget('nama_lengkap');
        $request->session()->forget('username');
        $request->session()->forget('password');
        $request->session()->forget('id');

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
