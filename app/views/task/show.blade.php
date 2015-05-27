@extends('projects.app')

@section('content')
    <h2>{{$task->name}}</h2>

    @if (!$projects || !$projects->tasks || $projects->tasks->count() < 1 )
        Your project has no tasks.
    @else
        <ul>
                <li>
                    {{$task->description}}
                    @if ($task->completed)
                        <br>Pabaigtas</br>
                        @else
                        <br>nepabaigtas</br>
                        @endif

                </li>
        </ul>
    @endif

    <p>
        {{ link_to_route('projects.index', 'Back to Projects') }} |
        {{ link_to_route('projects.tasks.create', 'Create Task', $projects->slug) }}
    </p>
@stop