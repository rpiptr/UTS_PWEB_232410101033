<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $akun = [
        [
            'username' => 'raffy123',
            'password' => '654321',
            'email' => 'raffy@gmail.com',
            'no_hp' => '08123456789',
            'alamat' => 'Jakarta, Indonesia'
        ],
        [
            'username' => 'rpiptr',
            'password' => '123456',
            'email' => 'rpiptr@gmail.com',
            'no_hp' => '0895704146447',
            'alamat' => 'Sidoarjo, Jawa Timur'
        ]
    ];

    public function showLogin (){
        return view('login');
    }
    
    public function submit(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        foreach ($this->akun as $akun) {
            if ($akun['username'] === $username && $akun['password'] === $password) {
                return redirect()->route('dashboard', ['username' => $akun['username']]);
            }
        }

        return back()->withErrors(['login' => 'The username or password you entered is incorrect. Please try again.'])->withInput();
    }

    public function dashboard(Request $request) {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request) {
        $username = $request->query('username');
        $akun = collect($this->akun)->firstWhere('username', $username);
        return view('profile', $akun);
    }

    public function showListBuku(Request $request){
        $buku = [
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'genre' => 'Fiction',
                'tahun' => 2005
            ],
            [
                'judul' => 'The Hunger Games',
                'penulis' => 'Suzanne Collins',
                'genre' => 'Action',
                'tahun' => 2008
            ],
            [
                'judul' => 'The Midnight Library',
                'penulis' => 'Matt Haig',
                'genre' => 'Fantasy',
                'tahun' => 2020
            ],
            [
                'judul' => 'It Ends with Us',
                'penulis' => 'Colleen Hoover',
                'genre' => 'Romance',
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
                'genre' => 'Adventure',
                'tahun' => 2020
            ],
            [
                'judul' => 'Pulang',
                'penulis' => 'Leila S. Chudori',
                'genre' => 'Historical Fiction',
                'tahun' => 2012
            ],
            [
                'judul' => 'Aku Juga Ingin Dianggap',
                'penulis' => 'Wulan Dwi Biraeng',
                'genre' => 'Drama',
                'tahun' => 2022
            ],
            [
                'judul' => 'Laut Bercerita',
                'penulis' => 'Leila S. Chudori',
                'genre' => 'Historical Fiction',
                'tahun' => 2017
            ],
            [
                'judul' => 'The Night Circus',
                'penulis' => 'Erin Morgenstern',
                'genre' => 'Fantasy',
                'tahun' => 2011
            ],
            [
                'judul' => 'It Ends with Us',
                'penulis' => 'Colleen Hoover',
                'genre' => 'Romance',
                'tahun' => 2016
            ]
        ];
        $username = $request->query('username');
        return view('pengelolaan', compact('buku', 'username'));
    }

    public function logout() {
        return redirect()->route('login');
    }
}
