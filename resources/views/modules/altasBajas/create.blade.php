@extends('../../layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Crear nuevo registro de alta o baja</h2>
                <form action="{{route('store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <label for="tipo">Tipo</label>
                        <select name="tipo" id="tipo" class="form-select">
                            <option value="">selecciona una opcion</option>
                            <option value="Pago">Pago</option>
                            <option value="Gasto">Gasto</option>
                        </select>
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria" class="form-select">
                        @foreach ($items as $item)
                        <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                    <label for="costo">Cantidad</label>
                    <input type="number" class="form-control" name="costo" id="costo">
                    <label for="descripcion">descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection