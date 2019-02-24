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
            <th>Cantidad de Lotes Creados </th>
            <th>Cantidad de Lotes Existentes</th>
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
                {data: 'cant_lotes_creados'},
                {data: 'cant_lotes_existentes'},
      ],
      "language": {

            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"

        },
            });

        } );
    </script>
</div>
@endsection
