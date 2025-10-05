<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth-login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => ['required', 'min:3', 'regex:/[A-Z]/'],
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal tiga karakter',
            'password.regex' => 'Password wajib mengandung minimal satu huruf kapital'
        ]);

        if ($request->username === $request->password) {
            $data['username'] = $request->username;
            $data['password'] = $request->password;
            return view('auth-welcome', $data);
        } else {
            return redirect('/auth')->with('error', 'Username dan password harus sama.');
        }
    }

}
