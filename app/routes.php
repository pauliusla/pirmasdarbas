<?php
Route::get('/', function()
{
	return View::make('hello');
});
Route::model('tasks', 'Task');
Route::model('project', 'Project');

Route::bind('projects', function($value, $route) {

    return Project::where('slug', '=', $value)->firstOrFail();
});

Route::bind('tasks', function($value, $route) {
    return Task::whereSlug($value)->firstOrFail();
});


Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');