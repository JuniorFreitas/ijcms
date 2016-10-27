<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rocket CMS</title>
    <link rel="stylesheet" href="{{elixir('css/admin.css')}}">
</head>
<body class="gray-bg">
<br>
<br>
@yield('content')
<hr>
<p class="m-t text-center"> <small>IJDESIGN CMS &copy; {{ date('Y') }}</small> </p>
<!-- Mainly scripts -->
<script src="{{elixir('js/admin.js')}}"></script>
</body>
</html>