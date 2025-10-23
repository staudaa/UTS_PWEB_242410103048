<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        $username = $request->input('username');
        $password = $request->input('password');
        return redirect('/dashboard?username=' . urlencode($username) . '&password=' . urlencode($password));
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        $password = $request->query('password');
        return view('dashboard', compact('username', 'password'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        $password = $request->query('password');
        $dataBunga = [
            ['icon' => '', 'nama' => 'Fresh Flower Bouquet', 'kategori' => 'Fresh Flower', 'harga' => 'Rp175.000', 'stok' => 30, 'deskripsi' => 'Simbol cinta dan kasih sayang.'],
            ['icon' => '', 'nama' => 'Pipe Cleaner Giftbox', 'kategori' => 'Buket', 'Pipe Cleaner' => 'Rp90.000', 'stok' => 20, 'deskripsi' => 'Lembut dan elegan untuk setiap momen.'],
            ['icon' => '', 'nama' => 'Lily Bouquet', 'kategori' => 'Dekorasi', 'Wedding' => 'Rp200.000', 'stok' => 15, 'deskripsi' => 'Harum dan memesona, cocok untuk hadiah.'],
        ];

        $testimoni = [
            ['icon' => '', 'pesan' => 'Bunga segar dan sangat cantik!', 'nama' => 'Raw'],
            ['icon' => '', 'pesan' => 'Suka banget sama desainnya!', 'nama' => 'Rawda'],
        ];

        return view('pengelolaan', compact('username', 'password', 'dataBunga', 'testimoni'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        $password = $request->query('password');

        return view('profile', compact('username', 'password'));
    }
}
