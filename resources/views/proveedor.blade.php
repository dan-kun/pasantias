@extends('layouts.app')

@extends('menu')

@section('content')
<div class="content">
                <div class="title m-b-md">
                    <h1>Estas en vista Proveedores</h1>
                </div>
            </div>


<div class="container">

    <table id="example" class="table table-striped table-bordered" style="width:90%; margin-left:1%">
       <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Proveedor</th>
                <th class="text-center">Orden de Compra</th>
                <th class="text-center">Tiraje </th>
                <th class="text-center">Valor Facial</th>
                <th class="text-center">Motivo</th>
                <th class="text-center">Codigo Motivo</th>
                <th class="text-center">Status</th>
            </tr>
       </thead>
    </table>
</div>


<script>
    $(document).ready(function() {
        $('#example').DataTable({
          "ServerSide": true,
          "ajax": "{{ url('api/proveedor') }}",
          "columns": [
            {data: 'id'},
            {data: 'proveedor'},
            {data: 'orden_compra'},
            {data: 'tiraje'},
            {data: 'valor_facial'},
            {data: 'motivo'},
            {data: 'cod_motivo'},
            {data: 'status'},
  ],
  "language": {

            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"

        },
        });

    } );
</script>
@endsection
