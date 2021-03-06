@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card mt-4">
        <div class="card-header">
            <i class="fa fa-save"></i> Editar categorias
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ route('categorias.update', $datos->id) }}" method="POST">
                @csrf
                {{-- Para poder actualizar debemos de pasar el metodo put aqui siempre
                dejando el POST en la etiqueta form --}}
              @method('PUT')
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" class="form-control" placeholder="Categoria" value="{{ $datos->categoria }}">
                </div>
                <div class="form-group">
                    <input type="submit" value="Editar categoria" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection