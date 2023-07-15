@extends('Layouts.mainLayout')

@section('title', '| Detail Tugas')

@section('dashboard')

    <div class="w-100">
        <h1>{{ $task->title }}</h1>
    </div>
{{ $task }}

@endsection
