@extends('master.layout')

@section('content')

<h1 class="text-center">@if(isset($usuario))EDITAR @else LISTA @endif</h1><hr>


<div class="text-center mt-3 mb-4">
    <a href="{{url('usuarios/create')}}" >
        <button class="btn btn-success"> Cadastrar </button>
    </a>
</div>

<div class="col-8 m-auto">

    <table class="table text-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Endereco</th>
            <th scope="col">Cargo</th>
        </tr>
        </thead>
        <tbody>

       @foreach($usuario as $usuarios)

        @php
            $user=$usuarios->find($usuarios->id)->relUsers;
        @endphp    

        <tr>
        <th scope="row">{{$usuarios->id}}</th>
            <td>{{$usuarios->name}}</td>
            <td>{{$usuarios->email}}</td>
            <td>{{$usuarios->endereco}}</td>
            <td>{{$usuarios->cargo}}</td>
            <td>
            <a href="{{url("usuario/$usuarios->id")}}">
                    <button class="btn btn-dark">Visualizar</button>
            </td>
            <td>
            <a href="{{url("usuario/$usuarios->id/edit")}}">
                    <button class="btn btn-primary">Editar</button>
            </td>
            <td>
                <a href="">
                    <button class="btn btn-danger">Deletar</button>
            </td>
        </tr
           
       @endforeach


>

        </tbody>
    </table>
</div>

@endsection
