const elixir = require('laravel-elixir');
require('laravel-elixir-livereload');
/*
 elixir(function (mix) {
 mix.less('app.less', 'public/assets/admin/css');
 mix.scripts('app.js', 'public/assets/admin/js');

 mix.styles([
 'font-awesome.min.css',
 'bootstrap.min.css',
 'site/estilo.css',
 ], 'public/css/site.css');

 mix.scripts([
 'jquery/dist/jquery.min.js',
 'bootstrap.min.js',
 'funcoes.js',
 ], 'public/js/site.js');

 mix.version(['css/site.css', 'js/site.js'])
 });*/

elixir(function (mix) {
    mix.styles([
            '../components/bootstrap/dist/css/bootstrap.min.css',
            '../components/font-awesome/css/font-awesome.min.css',
            '../components/summernote/dist/summernote.css',
            '../components/animate.css/animate.min.css',
            '../components/datetimepicker/jquery.datetimepicker.css',
            '../components/blueimp-file-upload/css/jquery.fileupload.css',
            '../components/blueimp-file-upload/css/jquery.fileupload-ui.css',
            '../../../node_modules/sweetalert/dist/sweetalert.css',
            '../admin/css/app.css'
        ],
        'public/css/admin.css'
    );

    mix.scripts([
            '../components/jquery/dist/jquery.min.js',
            '../components/jquery-ui/jquery-ui.min.js',
            '../components/bootstrap/dist/js/bootstrap.min.js',
            '../components/slimScroll/jquery.slimscroll.min.js',
            '../components/metisMenu/dist/metisMenu.min.js',
            '../components/summernote/dist/summernote.min.js',
            '../components/summernote/dist/lang/summernote-pt-BR.min.js',
            '../components/datetimepicker/build/jquery.datetimepicker.full.js',
            '../components/pace/pace.min.js',
            '../../../node_modules/sweetalert/dist/sweetalert.min.js',
            '../admin/js/app.js',
        ],
        'public/js/admin.js'
    );
    mix.livereload();
    /*mix.copy('resources/assets/components/font-awesome/fonts', 'public/build/fonts');*/
    mix.copy('resources/assets/components/summernote/dist/font', 'public/build/fonts');
    mix.version(['css/admin.css', 'js/admin.js']);
});