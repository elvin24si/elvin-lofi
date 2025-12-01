<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => ['required', 'min:3'],
        ], [
            'email.required'    => 'Email tidak boleh kosong',
            'email.email'       => 'Format email tidak valid',
            'password.required' => 'Password tidak boleh kosong',
            'password.min'      => 'Password minimal tiga karakter',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {

            Auth::login($user);

            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        } else {
            return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama'     => ['required', 'regex:/^[^0-9]+$/'],
            'alamat'   => 'required|max:300',
            'username' => 'required',
            'password' => ['required'],
        ], [
            'nama.regex' => 'Nama tidak boleh mengandung angka.',
            'alamat.max' => 'Alamat maksimal 300 karakter.',
        ]);
        if ($request->password === $request->confirm) {
            return redirect()->route('logvolt')
                ->with('success', 'Registrasi Berhasil! Silahkan Login Kembali');
        } else {
            return redirect()->route('regisvolt')
                ->with('error', 'Username dan password harus sama.');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();      // Hapus semua session
        $request->session()->regenerateToken(); // Cegah CSRF

        // Redirect ke halaman login
        return redirect()->route('auth.login')->with('success', 'Logged out!');
    }

}
