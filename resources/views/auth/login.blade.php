@extends('layouts.app')
@section('content')
    <div class="text-center">
        <img src="http://www.laune.com.br/imagens/logoij.png">
    </div>
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <h3>Bem Vindo</h3>

        <div class="text-left">
            @include('admin._inc.alerts')
        </div>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <input type="email" name="email" class="form-control" placeholder="E-mail" required=""
                       value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <input type="password" name="password" class="form-control" placeholder="Senha" required="">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <p></p>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Logar</button>


        </form>
    </div>

@endsection
