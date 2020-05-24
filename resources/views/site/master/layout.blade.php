<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QHelp - Página inicial</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/reset.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>" type="text/css">

    <!-- CSS - Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body class="has-fixed-sidenav">
    <header>
        <!-- Navbar superior -->
        <div class="navbar-fixed">
            <nav class="navbar white">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo grey-text text-darken-4">Bem-Vindo $user</a>
                    
                    <!-- Para abrir menu no mobile -->
                    <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons icon-blue">menu</i></a>
                    
                    <ul id="nav-mobile" class="right">
                        <li class="hide-on-med-and-down">
                            <a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect"><i class="material-icons icon-blue">notifications</i></a>
                        </li>
                        <li>
                            <a href="#!" data-target="dropdown-menu" class="dropdown-trigger waves-effect">
                                <i class="material-icons icon-blue">account_circle</i>
                            </a>
                        </li>

                        <!-- Dropdown navbar -->
                        <ul id="dropdown-menu" class="dropdown-content">
                            <li><a href="">Login</a></li>
                            <li class="divider"></li>
                        </ul>

                        
                </div>
            </nav>
        </div>

        <!-- Navbar lateral -->
        <ul id="mobile-navbar" class="sidenav sidenav-fixed blue darken-2 white-text ">
            <li>
                <div class="logo-corrector">
                    <a href="{{ route('site.home') }}" class="logo-containerwhite"> <img class="logo-corrector" src="{{ asset('images/wink-branco.png') }}"> </a>
                </div>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li class="no-padding">
                <ul class="collapsible">
                    <li class="bold"><a href=""><i class="material-icons">dashboard</i>Dashboatd</a></li>
                    <li class="bold"><a href=""><i class="material-icons">chat</i>Chat</a></li>
                    <li class="bold"><a href=""><i class="material-icons">label</i>Histórico</a></li>
                    <li class="bold"><a href=""><i class="material-icons">settings</i>Configurações</a></li>
                    <li class="bold"><a href=""><i class="material-icons">info_outline</i>Informações</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <main class="container">

        @yield('content')

    </main>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JavaScript - Materialize) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Script do site -->
    <script type="text/javascript" src="<?php echo asset('js/script.js') ?>"></script>
</body>

</html>