<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QHelp - Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/reset.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">

    <!-- CSS - Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <main>
        <div class="valign-wrapper" id="alinhamento-login">
            <div class="valign" id="alinhamento-login2">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 offset-m3">
                            <div class="card blue darken-2 ">
                                <div class="card-content">
                                    <span class="card-title blue darken-2 white-text">Preencha para logar</span>
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="teste" id="login" type="text" class="validate white-text">
                                                <label for="login" class="active">Login</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="*****" id="password" type="password" class="validate white-text">
                                                <label for="password" class="active">Senha</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-action">
                                    <input type="submit" class="btn" value="Entrar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JavaScript - Materialize) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>