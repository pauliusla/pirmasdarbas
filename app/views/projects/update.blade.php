@extends('projects.app')

@section('content')
    <h2>Edit Project</h2>

    {{ Form::model($projects, ['method' => 'PATCH', 'route' => ['projects.update', $projects->slug]]) }}
    @include('projects/partials/_form', ['submit_text' => 'Edit Project'])
    {{ Form::close() }}
    <p>
        {{ link_to_route('projects.index', 'Back to Projects') }}
    </p>
@endsection