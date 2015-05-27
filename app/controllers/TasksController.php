<?php

class TasksController extends \BaseController {

    public function index(Project $projects)
    {
        return View::make('task.index', compact('projects'));
    }

    public function create(Project $projects)
    {
        return View::make('task.create', compact('projects'));
    }

    public function store(Project $project)
    {
        $input = Input::all();
        $input['project_id'] = $project->id;
        Task::create( $input );

        return Redirect::route('projects.show', $project->slug)->with('message', 'Task created.');
    }

    public function show(Project $projects, Task $task)
    {
        return View::make('task.show', compact('projects', 'task'));
    }

    public function edit(Project $projects, Task $task)
    {
        return View::make('task.edit', compact('projects', 'task'));
    }

    public function update(Project $projects, Task $task)
    {
        $input = array_except(Input::all(), '_method');
        $task->update($input);

        return Redirect::route('projects.tasks.show', [$projects->slug, $task->slug])->with('message', 'Task updated.');
    }

    public function destroy(Project $projects, Task $task)
    {
        $task->delete();
        return Redirect::route('projects.show', $projects->slug)->with('message', 'Task deleted.');
    }


}
