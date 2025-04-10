<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function index(){
        return view('login');
    }

        public function login_action(Request $request): RedirectResponse
        {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            // dd($credentials);
            
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                // dd('berhasil login');
                
                $role = Auth::user()->role;
                 
                // dd($role);
                if($role === 'admin'){
                    return redirect()->route('admin.dashboard');
                }elseif($role === 'pegawai'){
                    return redirect()->route('pegawai.dashboard');
                }else{
                    return redirect('/')->withError('anda tidak memiliki akses');
                }
                
            }else{
                return redirect('/')->withError("kata sandi atau gmail anda salah");
                
            }
            
        }
        public function logout(Request $request) {
            Auth::logout(); // Logout pengguna
            $request->session()->invalidate(); // Menghapus sesi
            $request->session()->regenerateToken(); // Mengatur ulang token
            return redirect('/'); // Mengarahkan ke halaman utama
        }
        
    }
    