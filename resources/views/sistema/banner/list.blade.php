@extends('layouts.admin')
@section('title', 'DashBoard')
@section('menu')
    @include('layouts.menu.menu',['ativo' => 'banner', 'subcat' => ''])
@stop
@section('content')
    <h1>Banner - <span>{{$total}}</span></h1>
    <a href="{{route('banner.criar')}}" class="btn dim btn-primary"><i class="fa fa-plus"></i> Criar Banner</a>
    <br><br>
    <div class="ibox">
        <div class="ibox-content">
            @if (count($results) > 0)
                <form action="" method="post">
                    {{ csrf_field() }}
                    <div class="table-responsive">
                        <table class="table table-striped table-align-middle">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Titulo</th>
                                <th>URL</th>
                                <th>Criação</th>
                                <th>status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($results as $result)
                                <tr>
                                    <td>
                                    {!! Form::checkbox('categorys[]', $result->id , false) !!}
                                    <td>{{ $result->titulo_banner }}</td>
                                    <td>{{ $result->url_banner }}</td>
                                    <td>{{ $result->criado_banner }}</td>
                                    <td>
                                        @if ($result->ativo_banner === 1)
                                            <i class="fa fa-check fa-2x" style="color:green"></i>
                                        @elseif ($result->ativo_banner === 0)
                                            <span class="badge"><i class="fa fa-close fa-2x text-dange"></i></span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href=""
                                           class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button type="submit" class="btn btn-danger"><i
                                class="fa fa-trash"></i> Deletar
                    </button>
                </form>
                {!! $results->render() !!}
            @else
                <div class="widget p-lg text-center">
                    <i class="fa fa-exclamation-triangle fa-2x"></i>
                    <h4 class="no-margins">Nenhum Registro Encontrado</h4>
                </div>
            @endif
        </div>
    </div>
@endsection