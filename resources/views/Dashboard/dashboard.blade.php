@extends('Layouts.mainLayout')

@section('title','')

@section('dashboard')

    <div class="row w-100 d-flex justify-content-between">
        <div class="p-5 h-100 shadow-lg mt-5 col-3"><a class="nav-link" href="/tugas">Tugas</a></div>
        <div class="p-5 h-100 shadow-lg mt-5 col-3"><a class="nav-link" href="/tugas-kelompok">Tugas Kelompok</a></div>
        <div class="p-5 h-100 shadow-lg mt-5 col-3"><a class="nav-link" href="">Murid</a></div>
    </div>
    {{-- {{ Auth::user() }} --}}

@endsection

