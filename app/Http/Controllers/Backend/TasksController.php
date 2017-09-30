<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function getIndex()
    {
    	// Accediendo al Auth mediante \Auth::   -> Allow to get the user tasks : authenticating
    	$tasks = \Auth::User()->tasks()->get();
    	//dd($tasks);
    	return view('tasks.tasks')->with('tasks',$tasks);
    }
}
