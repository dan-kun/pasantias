@extends('layouts.app')

@extends('menu')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    <h1>Estas en vista de Pendiente por GSI</h1>

                </div>
            </div>
          <div class="container">
            <div class="row">
              <div class="col">
                <table class="table table-striped table-bordered">
                @foreach ($pendiente as $pend)
                    <tr>
                      <td>{{ $pend -> id }}</td>
                      <td>{{ $pend -> proveedor }}</td>
                      <td>{{ $pend -> valor_facial }}</td>
                      <td>{{ $pend -> tiraje }}</td>
                      <td>{{ $pend -> cod_motivo }}</td>
                      <td>{{ $pend -> motivo }}</td>
                      <td>{{ $pend -> orden_compra }}</td>
                      <td>{{ $pend -> status }}</td>
                      <td><a href="{{ route('pendientegsi.edit', $pend -> id) }}" class="btn btn-primary">Liberar</a></td>
                    </tr>
            @endforeach
            </table>
            </div>
          </div>
        </div>

@endsection
