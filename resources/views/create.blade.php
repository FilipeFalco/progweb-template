@extends('master.layout')

@section('content')

<h1 class="text-center">@if(isset($usuario))EDITAR @else CADASTRAR @endif</h1><hr>

<div class="col-8 m-auto">

    @if(isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
                {{$erro}}<br>
            @endforeach
        </div>
        @endif

        @if(isset($usuario))
        <form name="formEdit" id="formEdit" method="post" action="{{url("usuarios/usuario->id")}}">
            @@method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('usuarios')}}">
        @endif

    
        @csrf
            <input class="form-control" type="text" name="nome" id="title" placeholder="Nome" value="{{$usuario->name ?? ''}}">
        <select class="form-control" name="id_user" id="id_user">
        <option value="{{$usuario->relUsers->id ?? ''}}" > {{$usuario->relUsers->name ?? 'Nome'}}>Selecione</option>
        @foreach($users as  $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
        <input class="form-control" type="text" name="email" id="email" placeholder="Email" value="{{$usuario->email ?? ''}}>
        <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereco" value="{{$usuario->endereco ?? ''}}>
        <input class="form-control" type="text" name="Cargo" id="cargo" placeholder="Cargo" value="{{$usuario->cargo ?? ''}}>
        <input class="btn btn-primary submit" value="@if(isset($usuario))EDITAR @else CADASTRAR @endif">

    
    </form>

   
</div>

@endsection
