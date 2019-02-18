@extends('layouts.app')

@extends('menu')

@section('content')
<body>

<div class="container col-md-4 col-md-offset-4">

<form>
  <div class="btn-group" role="group" aria-label="...">
      <h2>Comboboxes</h2>
      <div class="btn-group" role="group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
              Seleccione una opción
              <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
              @foreach($proveed as $daniel)
                <li> <a href="proveedor/prueba/{proveedor}">{{$daniel->proveedor}}</a> </li>
              @endforeach
          </ul>
      </div>
  </div>
  <select name="id" id="addLocationIdReq" onchange="ShowSelected();">
    <option value="" disabled selected >Proveedores:</option>
                @foreach($proveed as $daniel)
                <option  onclick="add({{$daniel->id}});" value="{{$daniel->id}}" >{{$daniel->proveedor}}</option>
                @endforeach
            </select>

                <li value="" alert="id"> {{ $daniel -> motivo }}</li>
        </div>

</form>
</div>

});
<script type="text/javascript">
function add(id)
{
    alert(id);
};
</script>
</body>
</html>
@endsection
