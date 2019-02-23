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
       <tbody>
            @foreach($proveed as $prov)
                <tr>
                    <td>{{$prov-> id }}</td>
                    <td>{{$prov-> proveedor }}</td>
                    <td>{{$prov-> orden_compra }}</td>
                    <td>{{$prov-> tiraje }}</td>
                    <td>{{$prov-> valor_facial}}</td>
                    <td>{{$prov-> motivo }}</td>
                    <td>{{$prov-> cod_motivo }}</td>
                    <td>{{$prov-> status }}</td>
                  
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
