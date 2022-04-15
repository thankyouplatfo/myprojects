<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function store(Project $project)
    {
        # code...
        $data = request()->validate([
            'body' => 'required'
        ]);
        $data['project_id'] = $project->id;
        //
        Task::create($data);
        //
        return back();
    }
    //
    public function update(Project $project, Task $task)
    {
        //# code...
        //$data = request()->validate([
        //    'done' => 'done',
        //]);
        ////
        //$data['project_id']=$project->id;
        ////
        //$task->update($data);
        //
        $task->update([
            'done' => request()->has('done'),
        ]);
        //
        return back();
    }
    //
    public function destroy(Project $project, Task $task)
    {
        # code...
        $task->delete();
        //
        return redirect('/projects/' . $project->id);
    }
}
