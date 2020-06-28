<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QHelp - Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/reset.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>" type="text/css">

    <!-- CSS - Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<div class="container">
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card blue darken-2">
                <div class="card-content">
                    <span class="card-title blue darken-2 white-text">Preencha para logar</span>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="email" class="col m4">{{ __('E-mail') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="col m4">{{ __('Senha') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    
                        <div class="form-group row mb-0">
                            <div class="col m8 offset m4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu a senha?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>