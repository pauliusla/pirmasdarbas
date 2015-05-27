@extends('projects.app')

@section('content')
    <h2>{{ $projects->name }}</h2>

    @if ( !$projects->tasks->count() )
        Your project has no tasks.
    @else
        <ul>
            @foreach( $projects->tasks as $task )
                <li>
                    {{ Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'route' => ['projects.tasks.destroy', $projects->slug, $task->slug]]) }}
                    <a href="{{ route('projects.tasks.show', [$projects->slug, $task->slug]) }}">{{ $task->name }}</a>
                    (
                    {{ link_to_route('projects.tasks.edit', 'Edit', [$projects->slug, $task->slug], ['class' => 'btn btn-info']) }},

                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    )
                    {{ Form::close() }}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {{ link_to_route('projects.index', 'Back to Projects') }} |
        {{ link_to_route('projects.tasks.create', 'Create Task', $projects->slug) }}
    </p>
@endsection