@extends('Layouts.mainLayout')

@section('title', '| Detail Tugas')

@section('dashboard')

    <div class="w-100">
        <div class="row">
            <div class="col-9">
                <div>
                    <h1>{{ $task->title }}</h1>
                    <span>{{ $day }}</span>
                </div>
                <hr>
                <p>{{ $task->description }}</p>
                <hr>
                <div>
                    <h5>Komentar</h5>
                    <form action="" method="post">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
            <div class="col-3">
                <div class="shadow p-4 rounded">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Kirim Tugas</label>
                        <input class="form-control" type="file" id="formFile">
                        <button type="submit" class="btn btn-primary mt-3 form-control">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- {{ $task }} --}}

@endsection
