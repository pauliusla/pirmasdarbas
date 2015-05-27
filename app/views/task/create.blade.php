@extends('projects.app')

@section('content')
    <h2>Create Task</h2>

    {{ Form::open(['route' => ['projects.tasks.store', 'projects' => $projects->slug]]) }}
    @include('task/partials/_form', ['submit_text' => 'Create Project'])
    {{ Form::close() }}
    <p>
        {{ link_to_route('projects.index', 'Back to Projects') }}
    </p>
@stop
