@extends('projects.app')
@section('content')
    <h2>Projects</h2>


        @if (!$projects->count())
        You have no projects
        {{ link_to_route('projects.create', 'Create Project') }}
    @else
        <ul>
            @foreach( $projects as $project )
                <li><a href="{{ route('projects.tasks.index', $project->slug) }}">{{ $project->name }},</a>
                    {{ link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) }},
                {{ Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'route' => ['projects.destroy', $project->slug]]) }}
                (
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                )
                {{ Form::close() }}</li>
            @endforeach
        </ul>
    @endif
    <p>
        {{ link_to_route('projects.create', 'Create Project') }}
    </p>
@endsection