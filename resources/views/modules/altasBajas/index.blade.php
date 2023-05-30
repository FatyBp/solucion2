@extends('../../layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Registros de altas y bajas</h2>
                <a href="{{route('create')}}" class="btn btn-primary">hola</a>
                <hr>
                <table class="table table-sm table-hover" id="tabla-alta-baja">
                    <thead>
                        <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                                
                            <td>{{$item->tipo}}</td>
                            <td>{{$item->categoria}}</td>
                            <td>{{$item->costo}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
    @push('script')
        $(document).ready(function () {
        $('#tabla-alta-baja').DataTable();
    });
    @endpush
@endsection