@extends('master.layout')

@section('content')

<h1 class="text-center">Cadastrar</h1><hr>

<div class="col-8 m-auto">
    <form name="formCad" id="formCad" method="post" action="{{url('usuarios')}}">
        @csrf
        <input class="form-control" type="text" name="nome" id="title" placeholder="Nome">
        <select class="form-control" name="id_user" id="id_user">
        <option value="">Selecione</option>
        @foreach($users as  $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
        <input class="form-control" type="text" name="email" id="email" placeholder="Email">
        <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereco">
        <input class="form-control" type="text" name="Cargo" id="cargo" placeholder="Cargo">
        <input class="btn btn-primary submit" value="Cadastrar">

    
    </form>

   
</div>

@endsection
