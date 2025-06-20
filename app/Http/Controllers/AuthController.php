<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function registerLihat()
    {
        return view('register');
    }

    public function registerSubmit(Request $request){
        $data = new User();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('login.lihat')->with('succes', 'Login Berhasil');
    }

    public function loginLihat()
    {
        return view('login');
    }

    public function loginSubmit(Request $request){
    $user = User::where('nama', $request->nama)->first();
    if($user && Hash::check($request->password, $user->password)){
        Auth::login($user);
        $request->session()->regenerate();
        if(Auth::user()->role === 'admin'){
        return redirect()->route('dashboard')->with('success','Login berhasil');}

        elseif(Auth::user()->role === 'pemilik'){
        return redirect()->route('pemilik')->with('success','Login berhasil');}

        elseif(Auth::user()->role === 'pencari'){
        return redirect()->route('pencari')->with('success','Login berhasil');}
    }

    return redirect()->route('login.lihat')->with('failed', 'Username atau password salah');
}
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.lihat');
    }
    public function ogout()
    {
        Auth::logout();
        return redirect()->route('login.lihat');
    }
}
