@extends('layouts.admin')
@section('title', 'DashBoard')
@section('menu')
    @include('layouts.menu.menu',['ativo' => 'banner', 'subcat' => ''])
@stop
@section('content')
    <h1>Novo Banner</h1>
    <div class="tabs-container">
        <div class="tab-content">
            <div id="tab-contents" class="tab-pane active">
                <div class="panel-body">
                    <fieldset class="form-horizontal">
                        {!! Form::open(['files' => true, 'route' => 'banner.adicionar']) !!}
                        <div class="form-group" id="vtitulo_banner">
                            {!! Form::label('ltitulo_banner', 'Titulo:', ['class' => 'col-md-1 control-label']) !!}
                            <div class="col-md-11">
                                {!! Form::text('titulo_banner', '', ['class'=> 'form-control input-md' , 'min'=>'2', 'placeholder' => 'Titulo do Banner']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="vurl_banner">
                            {!! Form::label('lurl_banner', 'URL:', ['class' => 'col-md-1 control-label']) !!}
                            <div class="col-md-11">
                                {!! Form::text('url_banner', '', ['class'=> 'form-control input-md' , 'min'=>'3', 'placeholder' => 'javascript://']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="vfile-0">
                            {!! Form::label('imagem', 'Imagem:', ['class' => 'col-md-1 control-label']) !!}
                            <div class="col-md-11">
                                {!! Form::file('imagem',['class' => 'file', 'accept' => "jpg/png", 'id' => 'file-0',  'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1"></span>
                            <div class="col-md-11">
                                {!! Form::submit('Cadastrar', ['class' => 'btn']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </fieldset>
                </div>
            </div>
        </div>
    </div>



@endsection