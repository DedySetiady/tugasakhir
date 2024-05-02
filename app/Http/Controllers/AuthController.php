<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' =>'required',
                'password' =>'required',
            ]
            );
            $kredensil = $request->only('username','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect()->intended('admin');
                } elseif ($user->level == 'pimpinan') {
                    return redirect()->intended('pimpinan');
                } elseif ($user->level == 'operator') {
                    return redirect()->intended('operator');
                } elseif ($user->level == 'pelanggan') {
                    return redirect()->intended('pelanggan');
                }
                return redirect()->intended('/');
            }
 
        return redirect('login')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'Username dan Passowrd Salah']);
    }

    public function register(){
        return view('register');
    }

    public function simpanregister(Request $request)
{
    User::create([
        'name' => $request->name,
        'username' => $request->username, // Pastikan nilai ini sesuai dengan input form Anda
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'level' => 'pelanggan',
    ]);

    // Jika registrasi berhasil, arahkan pengguna ke halaman login
    return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
}

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
}