<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | IJDESIGN CMS</title>
    <link rel="stylesheet" href="{{elixir('css/admin.css')}}">
    <script src="{{elixir('js/admin.js')}}"></script>
</head>
<body class="fixed-sidebar">
<div id="wrapper">
   @yield('menu')
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <!-- Navbar -->
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-default" href="javascript://"><i class="fa fa-bars"></i>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="text-muted welcome-message">{{Auth::user()->name}} <strong>
                                <a href="" class="no-padding"></a></strong></span>
                        <img src="{{asset('build/assets/person.png')}}" class="img-circle img-shadow" height="32">
                    </li>
                    <li><a href="{{url('sair')}}"><i class="fa fa-sign-out"></i> Sair</a></li>
                </ul>
            </nav>
        </div>

        <!-- Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeIn">
                    @yield('content')
                    <br>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div><strong>IJDESIGN CMS</strong> - {{ date('Y') }}</div>
        </div>

    </div>
</div>


@if ( Config::get('app.debug') )
    <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
    </script>
@endif
</body>
</html>