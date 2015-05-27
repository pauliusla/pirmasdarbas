@extends('projects.app')

@section('content')
    <h2>Edit Task</h2>

    {{ Form::model($task, ['method' => 'PUT', 'route' => ['projects.tasks.update', $projects->slug, $task->slug]]) }}
    @include('task/partials/_form', ['submit_text' => 'Edit Task'])
    {{ Form::close() }}
@endsection