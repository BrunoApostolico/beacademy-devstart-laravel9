<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container w-75 p-3">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-white" href="/users">Usuários</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/posts">Posts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <ul class="navbar-nav mr-auto">
                            @if(Auth::user())
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Bruno</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="">Sair</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="">Cadastrar</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
        @yield('body')
</div>
</body>
</html>
