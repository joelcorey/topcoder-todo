<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Task;
use Log;

class TaskController extends Controller
{

    protected $tasks;

    public function __construct()
    {
        $this->middleware('auth');

        
    }

    public function index(Request $request)
    {
        $tasks = Task::where("is_completed", false)->orderBy("id", "DEC")->get();
        $completed_tasks = Task::where("is_completed", true)->get();
        return view("tasks", compact("tasks", "completed_tasks"));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $task = new Task();
        $task->user_id = \Auth::user()->id;
        $task->task = request("task");
        //log::info(print_r($task, true));
        $task->save();
        return Redirect::back()->with("message", "Task has been added");
    }

    public function complete($id)
    {
        $task = Task::find($id);
        $task->is_completed = true;
        $task->save();
        return Redirect::back()->with("message", "Task has been added to completed list");
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return Redirect::back()->with('message', "Task has been deleted");
    }
}
