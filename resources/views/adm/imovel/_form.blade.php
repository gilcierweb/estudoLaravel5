
@if(isset($imovel))
    {!! Form::model($imovel, ['route' => ['imoveis.update', $imovel->id], 'method' => 'patch']) !!}
@else
    {!! Form::open(['url' => 'adm/imoveis']) !!}
@endif

<div class="form-group">
    {!! Form::label('imovel_titulo_pt-br', 'Titulo Português:') !!}
    {!! Form::text('imovel_titulo_pt-br', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imovel_titulo_en', 'Titulo Inglês:') !!}
    {!! Form::text('imovel_titulo_en', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imovel_titulo_es', 'Titulo Espanhol:') !!}
    {!! Form::text('imovel_titulo_es', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imovel_resumo_pt-br', 'Resumo Português:') !!}
    {!! Form::textarea('imovel_resumo_pt-br', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imovel_resumo_en', 'Resumo Inglês:') !!}
    {!! Form::textarea('imovel_resumo_en', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imovel_resumo_es', 'Resumo Espanhol:') !!}
    {!! Form::textarea('imovel_resumo_es', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imovel_descricao_pt-br', 'Descrição Português:') !!}
    {!! Form::textarea('imovel_descricao_pt-br', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imovel_descricao_en', 'Descrição Inglês:') !!}
    {!! Form::textarea('imovel_descricao_en', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imovel_descricao_es', 'Descrição Espanhol:') !!}
    {!! Form::textarea('imovel_descricao_es', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('imovel_telefone', 'Telefone:') !!}
    {!! Form::text('imovel_telefone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imovel_mapa', 'Mapa (Google Maps):') !!}
    {!! Form::textarea('imovel_mapa', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imovel_video_url', 'Vídeo (Url Youtube):') !!}
    {!! Form::text('imovel_video_url', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}
