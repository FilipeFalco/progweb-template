@extends('master.layout')

@section('content')

<h1 class="text-center">Visualizar</h1><hr>

<div class="col-8 m-auto">
    Nome: {{$book->name}}<br>
    Email: {{$book->email}}<br>
    Endereço: {{$book->endereco}}<br>
    Cargo: {{$book->cargo}}<br>

</div>



@endsection
