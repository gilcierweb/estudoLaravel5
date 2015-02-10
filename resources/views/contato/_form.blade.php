@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        You are logged in!
                        GilcierWeb
                    </div>

                    {!! Form::model($contato, ['route => 'contatos.update', $contato->id])!!}

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::label('nome','Nome') !!}
                            {!! Form::text('nome',null, ['class' =>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Salvar',['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection