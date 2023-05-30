<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" 
    href="{{ asset('librerias/bootstrap5/bootstrap.min.css') }}">
    <link rel="stylesheet" 
    href="{{ asset('librerias/fontawesome6/css/all.css') }}">
    <title>{{ $titulo }}</title>
    <link rel="stylesheet" 
    href="{{ asset('librerias/DataTables/datatables.css') }}">
</head>
<body>
    @include('sweetalert::alert')
    @include('../shared/menu')
    @yield('contenido')
    <script src="{{ asset('librerias/DataTables/jQuery-3.6.0/jquery-3.6.0.js') }}">
    </script>
    <script src="{{ asset('librerias/DataTables/datatables.js') }}">
    </script>
    <script src="{{ asset('librerias/bootstrap5/bootstrap.bundle.min.js') }}">
    </script>
    @stack('scripts')
</body>
</html>