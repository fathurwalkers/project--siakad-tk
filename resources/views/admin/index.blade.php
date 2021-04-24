@extends('layouts.admin-layout')

@section('title', 'Dashboard Page')

@section('main-content')
    @if (session('success_login'))
    <div class="alert alert-success">
        {{ session('success_login') }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12 col-lg-3">

            <div class="small-box bg-warning mx-2">
                <div class="inner">
                <h3>Jumlah Siswa</h3>
                <p>Total Jumlah Siswa</p>
                </div>
                <div class="icon">
                <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">
                Lihat Daftar Siswa <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>

            <div class="small-box bg-success mx-2">
                <div class="inner">
                <h3>Jumlah Siswa</h3>
                <p>Total Jumlah Siswa</p>
                </div>
                <div class="icon">
                <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">
                Lihat Daftar Siswa <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>

            <div class="small-box bg-info mx-2">
                <div class="inner">
                <h3>Jumlah Siswa</h3>
                <p>Total Jumlah Siswa</p>
                </div>
                <div class="icon">
                <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">
                Lihat Daftar Siswa <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>

            <div class="small-box bg-primary mx-2">
                <div class="inner">
                <h3>Jumlah Siswa</h3>
                <p>Total Jumlah Siswa</p>
                </div>
                <div class="icon">
                <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">
                Lihat Daftar Siswa <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>

        </div>
        
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xl-12 mx-auto">
                <h1>Hello World!</h1>
            </div>
        </div>

    </div>
@endsection