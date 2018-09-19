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

    // protected $tasks;

    public function __construct()
    {
        $this->middleware('auth');

        // $this->tasks = $tasks;
    }   

    public function index(Request $request)
    {
        $tasks = Task::where("user_id", \Auth::user()->id)->get();

        return view('tasks')->with('tasks', $tasks);

    }

    public function store(Request $request)
    {
        $input = $request->all();
        $task = new Task();
        $task->user_id = \Auth::user()->id;
        $task->task = $request["task"];
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

    public function getTask($id)
    {
        $task = Task::find($id);

        log::info(print_r($task, true));

        // return view('edit')->with('task', $task);
        return view('edit', ['task' => $task]);
    }

    public function editTask($id, Request $request)
    {
        $task = Task::find($id);
        $task->user_id = \Auth::user()->id;
        $task->task = $request["task"];
        $task->save();
        // return Redirect::back()->with("message", "Task has been edited");
        return Redirect::to('tasks');
    }
}
