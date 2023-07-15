@extends('Layouts.mainLayout')

@section('title', '| Tugas')

@section('dashboard')

    <div class="w-100">

        <div>
            <h2>List Tugas Kelompok</h2>
        </div>

        <a href="/tugas-kelompok/create" class="btn btn-primary my-3">Tambah Tugas</a>

        @foreach ($groupTasks as $task)
        {{ $task }}
        <ul class="list-group">
            <li class="list-group-item"><h3><a class="nav-link" href="/tugas/{{ $task->id }}">{{ $task->title }}</a></h3></li>
            <li class="list-group-item"><p>
                <a class="nav-link" href="/tugas/{{ $task->id }}">{{ Str::limit($task->description, 150, '...') }}</a>
                <span class="text-danger">{{ $task->status }}</span>
            </p></li>
            <li class="list-group-item">
                <a class="d-inline btn btn-success" href="/tugas/{{ $task->id }}/edit">Edit</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Hapus
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            Yakin ingin menghapus data ini?
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('tugas.destroy', $task->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-primary">Yakin</button>
                                <a href="{{ route('tugas.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </li>
        </ul>
        @endforeach

    </div>

@endsection
