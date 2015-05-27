@extends('projects.app')

@section('content')
<h2>{{$projects->name}}</h2>
@if ( !$projects || !$projects->tasks || $projects->tasks->count() < 1)
Your project has no tasks.
{{ link_to_route('projects.tasks.create', 'Create Task', ['projects' => $projects->slug]) }}
@else
<ul>
@foreach((array) $projects->tasks as $key => $task )
<li>
Projektas editintas
</li>
@endforeach
</ul>
@endif

<p>
{{ link_to_route('projects.index', 'Back to Projects') }}
</p>
@stop

{{--@extends('projects.app')--}}
{{----}}
{{--@section('content')--}}
    {{--<h2>{{$projects->name}}</h2>--}}
    {{--@if ( !$projects || !$projects->tasks || $projects->tasks->count() < 1)--}}
        {{--Your project has no tasks.--}}
        {{--{{ link_to_route('projects.tasks.create', 'Create Task', ['projects' => $projects->slug]) }}--}}
    {{--@else--}}
        {{--<ul>--}}
            {{--@foreach((array) $projects->tasks as $key => $task )--}}
                {{--<li>--}}
                    {{--{{ link_to_route('projects.tasks.show', array_get($task, 'name'), [$projects->slug, array_get($task, 'slug')], ['class' => 'btn btn-info']) }}--}}
                    {{--{{ link_to_route('projects.tasks.edit', 'Edit', [$projects->slug, array_get($task, 'slug')], ['class' => 'btn btn-info']) }},--}}
                    {{--{{ Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'route' => ['projects.tasks.destroy', $projects->slug, array_get($task, 'slug')]]) }}--}}
                    {{--(--}}
                    {{--{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}--}}
                    {{--)--}}
                    {{--{{ Form::close() }}--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@endif--}}
{{----}}
    {{--<p>--}}
        {{--{{ link_to_route('projects.index', 'Back to Projects') }} |--}}
        {{--{{ link_to_route('projects.tasks.create', 'Create Task') }}--}}
    {{--</p>--}}
{{--@stop--}}
{{--{{ link_to_route('projects.tasks.show', array_get($task, 'name'), [$projects->slug, array_get($task, 'slug')], ['class' => 'btn btn-info']) }},--}}