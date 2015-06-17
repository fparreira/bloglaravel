<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>

<div class="jumbotron">
    <div class="container">
        <h1>Blog Laravel</h1>
        <p>Blog para estudo do PHP Laravel</p>
    </div>
</div>

<div class="container">

    <div class="col-md-9">

        @yield('conteudo')

    </div>
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
        <h4>Admin:</h4>

        <form class="form-signin">
            <input type="email" id="email" class="form-control" placeholder="Email" required autofocus>
            <input type="password" id="senha" class="form-control" placeholder="Senha" required>
            <button class="btn btn-default" type="submit">Entrar</button>
        </form>

    </div>

    <hr>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>