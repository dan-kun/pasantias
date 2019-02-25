@extends('layouts.app')

@extends('menu')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>Estas en vista de Orden de Compra</h1>
        </div>
    </div>

<div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:90%; margin-left:1%">
       <thead>
        <tr>
            <th>ID</th>
            <th>Orden de Compra</th>
            <th>Proveedor</th>
            <th>Cantidad de Creacion </th>
            <th>Cantidad Existente</th>
            <th>&nbsp; </th>
        </tr>
       </thead>
    </table>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
              "ServerSide": true,
              "ajax": "{{ url('api/ordencompra') }}",
              "columns": [
                {data: 'id'},
                {data: 'orden_compra'},
                {data: 'proveedor'},
                {data: 'cant_creacion'},
                {data: 'cant_existente'},
                {data: 'btn'},
      ],
      "language": {

            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"

        },
            });

        } );
    </script>
</div>
@endsection
