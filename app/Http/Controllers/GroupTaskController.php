<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class GroupTaskController extends Controller
{

    public function index(){

        $groupTasks = Task::where('type', 'group')->get();
        // dd($groupTasks);
        return view('Dashboard.GroupTask.groupTask',[
            'groupTasks' => $groupTasks,
        ]);

    }

    public function create(){

        return view('Dashboard.GroupTask.add-groupTask');

    }

    public function store(Request $request){

        dd($request);
        $request->validate([

        ]);

    }

}
