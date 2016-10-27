<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header text-center">
                <div class="profile-element">
                    <img src="http://www.laune.com.br/imagens/logoij.png">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">IJDESIGN CMS</strong>
                                </span>
                </div>
                <div class="logo-element">
                    <i class="fa fa-rocket"></i>
                </div>
            </li>
            <li class="{{$ativo=='dashboard' ? 'active' : ''}}"><a href="{{route('sistema.home')}}"><i class="fa fa-dashboard"></i> <span
                            class="nav-label">Dashboard</span></a></li>
            <li class="{{$ativo=='banner' ? 'active' : ''}}"><a href="{{route('sistema.banner')}}"><i class="fa fa-archive"></i> <span
                            class="nav-label">Banner</span></a></li>
            <li class="{{$ativo=='noticias' ? 'active' : ''}}">
                <a href="#"><i class="fa fa-comments"></i> <span class="nav-label">Notícias</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{$subcat=='categoria' ? 'active' : ''}}"><a href="">Categoria</a></li>
                    <li class="{{$subcat=='post' ? 'active' : ''}}"><a href="">Post</a></li>
                    <li class="{{$subcat=='comentario' ? 'active' : ''}}"><a href="">Comentarios</a></li>
                </ul>
            </li>
            <li class="{{$ativo=='paginas' ? 'active' : ''}}">
                <a href="#"><i class="fa fa-file-text"></i> <span
                            class="nav-label">Paginas</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="">Categorias</a></li>
                    <li><a href="">Conteudo</a></li>
                </ul>
            </li>
            <li class="{{$ativo=='produtos' ? 'active' : ''}}">
                <a href="#"><i class="fa fa-cube"></i> <span class="nav-label">Produtos</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="">Categoria</a></li>
                    <li><a href="">Conteudo</a></li>
                </ul>
            </li>
            <li class="{{$ativo=='galeria' ? 'active' : ''}}"><a href=""><i class="fa fa-photo"></i> <span
                            class="nav-label">Galeria</span></a>
            </li>
            <li class="{{$ativo=='email' ? 'active' : ''}}"><a href=""><i class="fa fa-envelope"></i> <span
                            class="nav-label">Email</span></a></li>
            <li class="{{$ativo=='usuario' ? 'active' : ''}}"><a href=""><i class="fa fa-users"></i> <span
                            class="nav-label">Usuário</span></a></li>
        </ul>
    </div>
</nav>