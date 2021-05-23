<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/static.css')}}">
</head>

<body>
<div id="page-div">
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top"">
        <a class="navbar-brand" href="/home"> <img style="max-width:110px;" src='{{asset("assets/logo-ej.png")}}' alt="Logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/diretrizes">Diretrizes Estratégicas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/servicos') }}">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/company/choose') }}">Listar Empresas</a>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastrar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/company') }}">Cadastrar Empresa</a>
                        <a class="dropdown-item" href="{{ url('/federation') }}">Cadastrar Federação</a>
                    </div>
                </li>
                @endauth
                
            </ul>
            <form class="form-inline my-2 my-lg-0" action="{{ route('/company/search') }}" method="get">
                <input class="form-control mr-sm-2" type="text" name="empresa" id="empresa" placeholder="Digite o nome da empr..." aria-label="Search">
                <button class="btn btn-info"  type="submit">Buscar Empresa</button>
            </form>
            <ul class="navbar-nav mr-auto" id="login-logout">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Cadastro</a>
                </li>
                @endguest
                @auth
                <li class="nav-item" id="li-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>
    
    <div class="painel">
        @guest
            <p>Painel do Visitante</p>
        @endguest
        @auth
            <p>Painel do Administrador</p>
        @endauth
    </div>
        <div id="div-conteudo">
            @yield('content')
        </div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>