<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Task;
use Log;

class GuidelinesController extends Controller
{

    // protected $tasks;

    public function __construct()
    {
        // $this->middleware('auth');

        // $this->tasks = $tasks;
    }   

    public function index(Request $request)
    {
        return view('guidelines');

    }

}
