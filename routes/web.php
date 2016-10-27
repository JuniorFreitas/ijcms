<?php


use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/sair', function () {
    Auth::logout();
    return redirect()->route('login');;
});

/*Route::group(['prefix' => 'sistema', 'middleware' => ['web']], function () {

    Route::get('home', ['as' => 'sistema.home', 'uses' => 'HomeController@index']);
    Route::get('', function () {
        return redirect()->route('sistema.home');
    });

    //Rotas de Mensagens AJAX
    Route::group(['prefix' => 'msg'], function () {
        Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'MsgController@sair']);
        Route::match(['get', 'post'], 'excluir', ['as' => 'excluir', 'uses' => 'MsgController@excluir']);
        Route::match(['get', 'post'], 'excluirBanner', ['as' => 'excluirBanner', 'uses' => 'MsgController@excluirBanner']);
        Route::match(['get', 'post'], 'excluirPagina', ['as' => 'excluirPagina', 'uses' => 'MsgController@excluirPagina']);
        Route::match(['get', 'post'], 'excluirVideo', ['as' => 'excluirVideo', 'uses' => 'MsgController@excluirVideo']);
        Route::match(['get', 'post'], 'excluirHomilia', ['as' => 'excluirHomilia', 'uses' => 'MsgController@excluirHomilia']);
        Route::match(['get', 'post'], 'excluirGaleria', ['as' => 'excluirGaleria', 'uses' => 'MsgController@excluirGaleria']);
        Route::match(['get', 'post'], 'excluirCarpinteiro', ['as' => 'excluirCarpinteiro', 'uses' => 'MsgController@excluirCarpinteiro']);
        Route::match(['get', 'post'], 'excluirUsuario', ['as' => 'excluirUsuario', 'uses' => 'MsgController@excluirUsuario']);
        Route::match(['get', 'post'], 'excluirArtigo', ['as' => 'excluirArtigo', 'uses' => 'MsgController@excluirArtigo']);
    });

    //Rotas de Cadastros
    Route::group(['prefix' => 'cadastro'], function () {

        Route::group(['as' => 'produtos.', 'prefix' => 'produtos', 'middleware' => ['web']], function () {
            Route::get('', ['as' => 'index', 'uses' => 'ProdutosController@index']);
            Route::get('adicionar', ['as' => 'formCadastro', 'uses' => 'ProdutosController@formCadastro']);
            Route::post('cadastrar', ['as' => 'cadastrar', 'uses' => 'ProdutosController@cadastrar']);
            Route::get('editar/{id}', ['as' => 'editar', 'uses' => 'ProdutosController@formEditar']);
            Route::post('atualiza/{id}', ['as' => 'atualiza', 'uses' => 'ProdutosController@atualiza']);
            Route::get('exclui/{id}', ['as' => 'exclui', 'uses' => 'ProdutosController@exclui']);
        });

        Route::group(['as' => 'categoria.', 'prefix' => 'categoria', 'middleware' => ['web']], function () {
            Route::get('', ['as' => 'index', 'uses' => 'CategoriaController@listar']);
            Route::post('cadastrar', 'CategoriaController@cadastrar');
        });


        Route::group(['as' => 'banner.', 'prefix' => 'banner', 'middleware' => ['web']], function () {
            Route::get('', ['as' => 'index', 'uses' => 'BannerController@index']);
            Route::get('adicionar', ['as' => 'formCadastro', 'uses' => 'BannerController@formCadastro']);
            Route::post('cadastrar', ['as' => 'cadastrar', 'uses' => 'BannerController@cadastrar']);
            Route::get('editar/{id}', ['as' => 'editar', 'uses' => 'BannerController@formEditar']);
            Route::get('exclui/{id}', ['as' => 'exclui', 'uses' => 'BannerController@exclui']);
            Route::post('atualiza/{id}', ['as' => 'atualiza', 'uses' => 'BannerController@atualiza']);
        });

        Route::group(['as' => 'paginas.', 'prefix' => 'paginas', 'middleware' => ['web']], function () {
            Route::get('', ['as' => 'index', 'uses' => 'PaginaController@index']);
            Route::get('adicionar', ['as' => 'formCadastro', 'uses' => 'PaginaController@formCadastro']);
            Route::post('cadastrar', ['as' => 'cadastrar', 'uses' => 'PaginaController@cadastrar']);
            Route::get('editar/{id}', ['as' => 'editar', 'uses' => 'PaginaController@formEditar']);
            Route::get('exclui/{id}', ['as' => 'exclui', 'uses' => 'PaginaController@exclui']);
            Route::post('atualiza/{id}', ['as' => 'atualiza', 'uses' => 'PaginaController@atualiza']);
        });

        Route::group(['as' => 'videos.', 'prefix' => 'videos', 'middleware' => ['web']], function () {
            Route::get('', ['as' => 'index', 'uses' => 'VideosController@index']);
            Route::get('adicionar', ['as' => 'formCadastro', 'uses' => 'VideosController@formCadastro']);
            Route::post('cadastrar', ['as' => 'cadastrar', 'uses' => 'VideosController@cadastrar']);
            Route::get('editar/{id}', ['as' => 'editar', 'uses' => 'VideosController@formEditar']);
            Route::get('exclui/{id}', ['as' => 'exclui', 'uses' => 'VideosController@exclui']);
            Route::post('atualiza/{id}', ['as' => 'atualiza', 'uses' => 'VideosController@atualiza']);
        });


        Route::group(['as' => 'usuario.', 'prefix' => 'usuario', 'middleware' => ['web']], function () {
            Route::get('', ['as' => 'index', 'uses' => 'UsuarioController@index']);
            Route::get('adicionar', ['as' => 'formCadastro', 'uses' => 'UsuarioController@formCadastro']);
            Route::post('cadastrar', ['as' => 'cadastrar', 'uses' => 'UsuarioController@cadastrar']);
            Route::get('editar/{id}', ['as' => 'editar', 'uses' => 'UsuarioController@formEditar']);
            Route::get('exclui/{id}', ['as' => 'exclui', 'uses' => 'UsuarioController@exclui']);
            Route::post('atualiza/{id}', ['as' => 'atualiza', 'uses' => 'UsuarioController@atualiza']);
        });

    });

     Route::group(['as' => 'blog.', 'prefix' => 'blog', 'middleware' => ['web']], function () {
         Route::get('{id}', ['as' => 'index', 'uses' => 'BlogController@index']);
         Route::get('{id}/adicionar', ['as' => 'formCadastro', 'uses' => 'BlogController@formCadastro']);
         Route::post('cadastrar', ['as' => 'cadastrar', 'uses' => 'BlogController@cadastrar']);
         Route::get('editar/{id}/{padre}', ['as' => 'editar', 'uses' => 'BlogController@formEditar']);
         Route::get('exclui/{id}', ['as' => 'exclui', 'uses' => 'BlogController@exclui']);
         Route::post('atualiza/{id}', ['as' => 'atualiza', 'uses' => 'BlogController@atualiza']);

     });

    //Rotas Galeria
    Route::group(['as' => 'galeria.', 'prefix' => 'galeria', 'middleware' => ['web']], function () {
        Route::get('', ['as' => 'index', 'uses' => 'GaleriaController@index']);
        Route::get('adicionar', ['as' => 'formCadastro', 'uses' => 'GaleriaController@formCadastro']);
        Route::post('cadastrar', ['as' => 'cadastrar', 'uses' => 'GaleriaController@cadastrar']);
        Route::get('editar/{id}', ['as' => 'editar', 'uses' => 'GaleriaController@formEditar']);
        Route::post('atualiza/{id}', ['as' => 'atualiza', 'uses' => 'GaleriaController@atualiza']);
        Route::get('exclui/{id}', ['as' => 'exclui', 'uses' => 'GaleriaController@exclui']);
    });



});*/


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api', 'middleware' => 'cors'], function () {
    Route::post('login', 'AuthController@login');
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('produtos', 'ProdutoController@produtos');
    });
});

/*ROTAS DE SISTEMA*/
Route::group(['prefix' => 'sistema', 'middleware' => ['web']], function () {

    Route::get('home', ['as' => 'sistema.home', 'uses' => 'HomeController@index']);
    Route::get('banner', ['as' => 'sistema.banner', 'uses' => 'BannerController@index']);
    Route::get('banner/criar', ['as' => 'banner.criar', 'uses' => 'BannerController@formCreate']);
    Route::post('banner/adicionar', ['as' => 'banner.adicionar', 'uses' => 'BannerController@addup']);
    Route::get('mdados', ['as' => 'sistema.mdados', 'uses' => 'MetadadosController@cad']);
    Route::get('', function () {
        return redirect()->route('sistema.home');
    });
});
