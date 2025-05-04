<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function submit(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        if (($username === 'raffy123' || $username === 'rpiptr') && $password === '123456') {
            return redirect()->route('dashboard', ['username' => $username]);
        }

        return back()->withErrors(['login' => 'The username or password you entered is incorrect. Please try again.'])->withInput();
    }

    public function dashboard(Request $request) {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request) {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function showListBuku(Request $request){
        $buku = [
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'genre' => 'Fiksi',
                'tahun' => 2005
            ],
            [
                'judul' => 'The Hunger Games',
                'penulis' => 'Suzanne Collins',
                'genre' => 'Aksi',
                'tahun' => 2008
            ],
            [
                'judul' => 'The Midnight Library',
                'penulis' => 'Matt Haig',
                'genre' => 'Fantasi',
                'tahun' => 2020
            ],
            [
                'judul' => 'It Ends with Us',
                'penulis' => 'Colleen Hoover',
                'genre' => 'Romansa',
                'tahun' => 2016
            ],
            [
                'judul' => 'Daun yang Jatuh Tak Pernah Membenci Angin',
                'penulis' => 'Tere Liye',
                'genre' => 'Drama',
                'tahun' => 2010
            ],
            [
                'judul' => 'Nebula',
                'penulis' => 'Tere Liye',
                'genre' => 'Petualangan',
                'tahun' => 2020
            ],
            [
                'judul' => 'Pulang',
                'penulis' => 'Leila S. Chudori',
                'genre' => 'Fiksi Sejarah',
                'tahun' => 2012
            ]
        ];
        $username = $request->query('username');
        return view('pengelolaan', compact('buku', 'username'));
    }
}
