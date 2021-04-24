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
        $daftar_user = Detail::all();
        return view('admin.user.daftar-user', [
            'detail' => $daftar_user
        ]);
    }

    // public function create()
    // {
    //     //
    // }

    // public function store(Request $request)
    // {
    //     //
    // }

    // public function show($id)
    // {
    //     //
    // }

    // public function edit($id)
    // {
    //     //
    // }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // public function destroy($id)
    // {
    //     //
    // }
}
