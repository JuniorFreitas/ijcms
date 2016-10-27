<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="bKUpko1STlwKyMvPkIS922IL_QbEPHzZqWlgy3o82Xg" />
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    {!! SEO::generate(true) !!}
    <link rel="stylesheet" href="{{elixir('css/site.css')}}">
    <!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
    <![endif]--><!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script type="javascript" src="{{elixir('js/site.js')}}"></script>
</head>
<body>
<i class="fa fa-chevron-up voltarTopo"></i>

<header class="container-fluid bgtopo" id="home">

    <div class="row barMenu hidden-xs" style="min-height:150px;">
        <div class="container">
            <a class="navbar-brand" href="{{route('site.index')}}"> <img src="imagens/minilogo.gif"
                                                                         class="img-responsive" alt="logo"></a>
            <ul class="nav navbar-nav pull-left" style="margin-top: 4em; margin-left: 2em;">

                <li><a href="{{route('site.index')}}" id="inicio">INICIO <span
                                class="sr-only">(current)</span></a></li>
                <li><a href="" id="sobre">SOBRE <span
                                class="sr-only">(current)</span></a></li>
                <li><a href="" id="colecoes">COLEÇÕES <span class="sr-only">(current)</span></a>
                </li>
                <li><a href="" id="servicos">VÍDEOS <span
                                class="sr-only">(current)</span></a>
                </li>
                <li><a href="#depoimentos" onClick="ChamaLink('depoimentos');">AGENDAMENTO <span
                                class="sr-only">(current)</span></a></li>
            </ul>

            <ul class="nav navbar-nav pull-right" id="menu2">
                <li><a href="javascript://"
                       style="color: #FFFFFF; font-size: 1.3em; margin-top: 0.40em; cursor: default">98 3304.5560</a>
                </li>
                <li><a href="#portifolio" onClick="ChamaLink('portifolio');">
                        <i class="fa fa-facebook-official fa-2x"></i></a>
                </li>
                <li><a href="#portifolio" onClick="ChamaLink('portifolio');">
                        <i class="fa fa-instagram fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>


    <div class="row hidden-lg hidden-md hidden-sm" style="margin-bottom: -1.5em;">
        <nav class="navbar navbar-default hidden-lg hidden-md">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript://" class="navbar-toggle linkYellow" data-toggle="collapse"
                       data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><i
                                class="fa fa-bars fa-2x"></i></a>
                    <a class="navbar-brand " href="#"
                       style="margin-top: -0.45em; margin-left: -0.25em;"> <img src="{{asset('imagens/minilogo.gif')}}"
                                                                                class="img-responsive" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div>
                        <ul class="contactsTop" style="margin-top: -0.25em;">
                            <li><a href="javascript://"
                                   style="color: #FFFFFF; font-size: 1.3em; margin-top: 0.40em; cursor: default; text-decoration: none">98
                                    3304.5560</a>
                            </li>
                            <li><a href="#portifolio" class="linkYellow">
                                    <i class="fa fa-facebook-official fa-2x"></i></a>
                            </li>
                            <li><a href="#portifolio" class="linkYellow" onClick="ChamaLink('portifolio');">
                                    <i class="fa fa-instagram fa-2x"></i></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                        <ul class="navMenu" style="list-style: none">
                            <li><a href="{{route('site.index')}}" class="linkYellow ativo" onClick="ChamaLink('inicio');">INICIO <span
                                            class="sr-only">(current)</span></a></li>
                            <li><a href="{{route('site.sobre')}}" class="linkYellow" onClick="ChamaLink('inicio');">SOBRE <span
                                            class="sr-only">(current)</span></a></li>
                            <li><a href="#servicos" class="linkYellow" onClick="ChamaLink('servicos');">COLEÇÕES <span
                                            class="sr-only">(current)</span></a>
                            </li>
                            <li><a href="#portifolio" class="linkYellow" onClick="ChamaLink('portifolio');">VÍDEOS <span
                                            class="sr-only">(current)</span></a>
                            </li>
                            <li><a href="#depoimentos" class="linkYellow" onClick="ChamaLink('depoimentos');">AGENDAMENTO <span
                                            class="sr-only">(current)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<img src="{{asset('imagens/costura.png')}}" alt="linha" class="img-responsive sombra">

<section class="container">
    <article class="row" style="margin-bottom: 1.5em;">
        @yield('conteudo')
    </article>
</section>
<img src="{{asset('imagens/costura.png')}}" alt="linha" class="img-responsive sombra">
<footer class="container" style="background: #FFFFFF; color: #000000; padding: 1%; margin-top: 1em;">
    <div class="text-center">
        <div class="pull-left hidden-sm hidden-xs">
            <img src="{{asset('imagens/gsinvert.gif')}}" alt="" style="width: 70%; margin-top: -1em;" class="img-responsive">
        </div>
        <div class="pull-right hidden-sm hidden-xs">
            <img src="http://www.laune.com.br/imagens/logoij.png" alt="ijdesign" class="img-responsive">
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <p>
                R. 09, qd.04, n.º 02, loja 04 - Vinhais
                <br>
                2016. Todos os direitos reservados a Miriam Araujo Alta Costura
            </p>
            <img src="imagens/gsinvert.gif" alt="" style=" margin-top: -1em;"
                 class="img-responsive visible-sm visible-xs pull-right">
            <img src="http://www.laune.com.br/imagens/logoij.png" alt="ijdesign"
                 class="img-responsive visible-sm visible-xs pull-left">
        </div>
    </div>
</footer>
<script>
    $(function () {
        var urlAtiva = "{{(!isset($url)? "" : $url)}}";
        if (urlAtiva) {
            $('#' + urlAtiva).addClass('linkYellow ativo');
        } else {
            $('#inicio').addClass('linkYellow ativo');
        }
    })
</script>
</body>
</html>