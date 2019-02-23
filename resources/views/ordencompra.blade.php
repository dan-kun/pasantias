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
       <tbody>
            @foreach($compra as $oc)
                <tr>
                    <td>{{$oc->id }}</td>
                    <td>{{$oc->orden_compra }}</td>
                    <td>{{$oc->proveedor }}</td>
                    <td>{{$oc->cant_lotes_creados }}</td>
                    <td>{{$oc->cant_lotes_existentes}}</td>
                </tr>
            @endforeach
       </tbody>
    </table>

    <script>
        $(document).ready(function() {
        $('#example').DataTable();
            } );
    </script>
</div>
@endsection
