<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'alpha_num'],
            'password' => ['required', 'string', 'min:3'],
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == "kentut" && $password == "123") {
            return redirect()->route('dashboard', ['username' => $username]);
        }

        return back()->with('error', 'Akun salah! Anda bukan Ken 😡');
    }

    public function showDashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', ['username' => $username]);
    }

    public function showPengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $jadwalStreaming = [
            ['hari' => 'Senin', 'jam' => '18:30', 'game' => 'Monster Hunter World', 'tipe' => 'Grinding'],
            ['hari' => 'Rabu', 'jam' => '20:00', 'game' => 'Wuthering Waves', 'tipe' => 'ToA (Endgame)'],
            ['hari' => 'Jumat', 'jam' => '18:30', 'game' => 'Arknights: Endfield', 'tipe' => 'Story'],
        ];
        return view('pengelolaan', ['jadwal' => $jadwalStreaming, 'username' => $username]);
    }



    public function showProfile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $profileData = [
            'nama' => 'Website Personal Ken',
            'role' => 'Mahasiswa Livestreamer',
            'bio' => 'Sedang menempuh semester 4 perkuliahan. Mohon doanya agar tetap bisa live 🙏',
        ];
        return view('profile', ['username' => $username, 'profileData' => $profileData]);
    }

    public function logout()
    {
        return redirect()->route('showLogin');
    }

}
