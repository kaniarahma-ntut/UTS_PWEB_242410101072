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
            ['hari' => 'Senin', 'jam' => '19:00', 'game' => 'Valorant', 'tipe' => 'Competitive'],
            ['hari' => 'Rabu', 'jam' => '20:00', 'game' => 'Minecraft', 'tipe' => 'Chill Stream'],
            ['hari' => 'Jumat', 'jam' => '21:00', 'game' => 'Elden Ring', 'tipe' => 'Playthrough'],
            ['hari' => 'Sabtu', 'jam' => '19:30', 'game' => 'Just Chatting', 'tipe' => 'QnA & Review'],
        ];
        return view('pengelolaan', ['jadwal' => $jadwalStreaming, 'username' => $username]);
    }

    public function showProfile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $profileData = [
            'nama' => 'Ken',
            'role' => 'Casual College Gamer',
            'bio' => 'Mahasiswa semester 4 yang hobi ngegame sambil ngopi. Stream buat seneng-seneng dan ngisi waktu luang setelah nugas.',
        ];
        return view('profile', ['username' => $username, 'profileData' => $profileData]);
    }

    public function logout()
    {
        return redirect()->route('showLogin');
    }
}
