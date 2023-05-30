@extends('../../layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col ml-sm-5">
                <div class="card" style="width: 50rem;">
                    <h2 class="text-center">Total de pagos y gastos</h2>
                    <h4 style="background-color: greenyellow">Pago: {{$pago}}</h4><br>
                    <h4 style="background-color: red">Gasto: {{$gasto}}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection