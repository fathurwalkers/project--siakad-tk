@extends('layouts.admin-layout')

@section('title', 'Dashboard Page')

@section('main-content')
    @if (session('success_login'))
    <div class="alert alert-success">
        {{ session('success_login') }}
    </div>
    @endif
    <h1>Hello World!</h1>
@endsection