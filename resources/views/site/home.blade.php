@extends('site.master.layout')

@section('content')
<div class="row">
    <div class="col s12 l10 offset-l2">
        <a href="">
            <div class="card responsive-img center-align">
                <img class="image-corrector" src="{{ asset('images/target.png') }}">
                <h5>Recursos Humanos</h5>
                <p class="card-text-format">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, facere!</p>
            </div>
        </a>
    </div>
    <div class="col s12 l10 offset-l2">
        <a href="">
            <div class="card">
                <div class="responsive-img center-align">
                    <img class="image-corrector" src="{{ asset('images/technical.png') }}">
                    <h5>Departamento de informatica</h5>
                    <p class="card-text-format">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, atque!</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col s12 l10 offset-l2">
        <a href="">
            <div class="card responsive-img center-align">
                <img class="image-corrector" src="{{ asset('images/payment-terminal.png') }}">
                <h5>Requisições de mercado</h5>
                <p class="card-text-format">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, commodi.</p>
            </div>
    </div>
</div>
</div>
@endsection