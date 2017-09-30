<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;

class TasksController extends Controller
{
    public function getIndex()
    {
    	// Accediendo al Auth mediante \Auth::   -> Allow to get the user tasks : authenticating
    	$tasks = \Auth::User()->tasks()->get();
    	//dd($tasks);
    	return view('tasks.tasks')->with('tasks',$tasks);
    }

    public function getCreate()
    {
    	return view('tasks.create');
    }

    public function postStore(Request $Request)
    {
    	/* $task = new Task();
    	$task->name = $Request->name;

    	// Utilizando el id del usuario autentificado
    	$task->user_id = \Auth::User()->id;

    	// Saving the record
    	$task->save(); */

    	// Otra forma de agregar registros
    	// Accediendo al user , la relacion tasks : asi se evita obtener el id del user por aparte
    	\Auth::User()->tasks()->create($Request->all());

    	

    	// With redirect I can use the route instead of the view
    	return redirect('Tasks');
    }
}
