<?php

class ProjectsController extends \BaseController {

    public function index()
    {
        $projects = Project::all();
        return View::make('projects.index', compact('projects'));
    }

    public function create()
    {

        return View::make('projects.create');
    }

    public function store()
    {
        $input = Input::all();
        Project::create( $input );

        return Redirect::route('projects.index')->with('message', 'Project created');
    }

    public function show(Project $projects)
    {
        return View::make('projects.show', compact('projects'));
    }

    public function edit(Project $projects)
    {
        return View::make('projects.edit', compact('projects'));
    }

    public function update(Project $projects)
    {
        $input = Input::except(['_method', '_token']);
        $projects->update($input);

        return Redirect::route('projects.show', $projects->slug)->with('message', 'Project updated.');
    }



    public function destroy(Project $projects)
    {
        $projects->delete();

        return Redirect::route('projects.index')->with('message', 'Project deleted.');
    }


}

