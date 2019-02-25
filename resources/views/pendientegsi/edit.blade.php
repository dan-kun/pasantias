@extends('layouts.app')

@extends('menu')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Lote a liberar {{ $pendiente->id }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="{{ route('pendientegsi.index') }}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('pendientegsi.update', $pendiente-> id) }}" method="POST">
                {{-- @csrf
                @method('put') --}}
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="status">Estatus:</label>
                    <input type="text" class="form-control" id="status" name="status" >
                </div>
                <button class="btn btn-primary" type="submit" >Aceptar</button>
            </form>
        </div>
    </div>
@endsection
