<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    }}