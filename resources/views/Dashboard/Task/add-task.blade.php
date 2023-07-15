@extends('Layouts.layout')

@section('title', 'Tugas | tambah tugas');

@section('layout')

    <div class="w-100">
        <form action="{{ route('tugas.store') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Nama Tugas</label>
              <input type="text" class="form-control" id="title" name="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Deskripsi</label>
                <textarea class="form-control" name="description" id="description" style="height: 100px"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/tugas" class="btn btn-danger">Kembali</a>
          </form>
    </div>

@endsection
