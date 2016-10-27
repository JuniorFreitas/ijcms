@extends('layouts.admin')
@section('title', 'DashBoard')
@section('menu')
    @include('layouts.menu.menu',['ativo' => 'dashboard', 'subcat' => ''])
@stop

{{--@section('sidebar')
    @include('admin._inc.sidebar')
@endsection--}}

@section('content')
    <div class="row white-bg border-bottom">
        <div class="container m-b-xl">
            <div class="m-t-xl m-l-xl">
                <h3 class="text-uppercase">Quantidade de Registros no Site</h3>
            </div>
            <div class="col-md-2">
                <h2 class="text-center">
                    <div class="btn btn-info btn-w-m">250 Noticias</div>
                </h2>
            </div>

            <div class="col-md-2">
                <h2 class="text-center">
                    <div class="btn btn-danger btn-w-m">5 Páginas</div>
                </h2>
            </div>

            <div class="col-md-2">
                <h2 class="text-center">
                    <div class="btn btn-danger btn-w-m">350 Produtos</div>
                </h2>
            </div>

            <div class="col-md-2">
                <h2 class="text-center">
                    <div class="btn btn-danger btn-w-m">10 Galeria</div>
                </h2>
            </div>
        </div>
    </div>
@endsection