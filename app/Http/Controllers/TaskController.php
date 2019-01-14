<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function showTask(){
    	$tasks = Task::all();
    	return view('tasks.tasklist',compact("tasks"));
    }
    public function addTask(Request $request){
    	$task = new Task;
    	$task->name = $request->newtask;
    	$task->save();
    	return redirect("/tasklist");
    }
    public function updateTask(Request $request,$taskid){
		$taskupdate = Task::find($taskid);
		$taskupdate->name = $request->editedtask;
		$taskupdate->save();
		return redirect("/tasklist");
    }
    public function deleteTask($taskid){
    	$taskdelete = Task::find($taskid);
    	$taskdelete->delete();
    	return redirect("/tasklist");
    }
}
