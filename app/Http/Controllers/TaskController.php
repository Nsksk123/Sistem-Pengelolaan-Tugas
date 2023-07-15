<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(){

        $tasks = Task::where('type', 'personal')->latest()->get();
        return view('Dashboard.Task.task', [
            'tasks' => $tasks,
        ]);

    }

    public function create(){

        return view('Dashboard.Task.add-task');

    }

    public function show($tuga){

        $task = Task::findOrFail($tuga);
        $days = Carbon::parse($task->created_at);
        $day = $days->format('d M Y');
        // dd($day);
        return view('Dashboard.Task.detail-task', [
            'task' => $task,
            'day' => $day,
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
        // dd($task);
        return view('Dashboard.Task.edit-task', [
            'task' => $task,
        ]);

    }

    public function update(Request $request, $tuga){

        $task = Task::findOrFail($tuga);

        $task->update($request->all());

        return redirect('/tugas');
    }

    public function destroy($tuga){

        $deletedTask = Task::findOrFail($tuga);

        $deletedTask->delete();

        return redirect('/tugas');

    }

}
