@extends('app')

@section('content')
    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]) !!}
    @include('_form', ['submit_text' => 'Edit Task'])
    {!! Form::close() !!}
@endsection