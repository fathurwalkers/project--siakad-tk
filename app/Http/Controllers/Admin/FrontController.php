<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Login;

class FrontController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('login');
    }
    
    public function register()
    {
        return view('register');
    }

    public function daftarUser()
    {
        $daftar_user = Detail::whereIn('detail_role', ['guest', 'user'])->get();
        return view('admin.user.daftar-user', [
            'detail' => $daftar_user
        ]);
    }

    public function daftarArtikel()
    {
        return view('admin.post.daftar-artikel');
    }

    public function buatArtikel()
    {
        return view('admin.post.buat-artikel');
    }
}
