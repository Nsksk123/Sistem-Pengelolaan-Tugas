<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(){

        $tasks = Task::all();
        return view('Dashboard.Task.task', [
            'tasks' => $tasks,
        ]);

    }

    public function create(){

        return view('Dashboard.Task.add-task');

    }

    public function show($tuga){

        $task = Task::findOrFail($tuga);
        return view('Dashboard.Task.detail-task', [
            'task' => $task,
        ]);
    }

    public function store(Request $request){

            $request->validate([
                'title' => 'required',
                'description' => 'required',
            ]);

        $task = Task::create($request->all());

        return redirect('/tugas');
    }

    public function edit($tuga){

        $task = Task::findOrFail($tuga);
        dd($task);

    }

}
