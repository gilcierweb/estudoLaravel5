@extends('app')

@section('content')
    {!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'']) !!}
    @include('_form', ['submit_text' => 'Create Task'])
    {!! Form::close() !!}
@endsection