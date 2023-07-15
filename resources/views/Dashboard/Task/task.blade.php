@extends('Layouts.mainLayout')

@section('title', '| Tugas')

@section('dashboard')

    <div class="w-100">

        <div>
            <h2>List Tugas </h2>
        </div>

        <a href="/tugas/create" class="btn btn-primary my-3">Tambah Tugas</a>

        @foreach ($tasks as $task)
        <ul class="list-group">
            <li class="list-group-item"><h3><a class="nav-link" href="/tugas/{{ $task->id }}">{{ $task->title }}</a></h3></li>
            <li class="list-group-item"><p>
                <a class="nav-link" href="/tugas/{{ $task->id }}">{{ Str::limit($task->description, 150, '...') }}</a>
                <span class="text-danger">{{ $task->status }}</span>
            </p></li>
            <li class="list-group-item">
                <a class="d-inline btn btn-success" href="/tugas/{{ $task->id }}/edit">Edit</a>
                <a class="d-inline btn btn-danger" href="">Hapus</a>
            </li>
        </ul>
        @endforeach

    </div>

@endsection
