@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Categorias</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Categorias</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"> 
                <i class="fa fa-cubes mr-1"></i>Categorias 
                <a class="btn btn-success" href="{{ url('categorias/create') }}">Agregar</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Categoria</td>
                                <td>Opciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_categoria as $item)                                
                                <tr>
                                    <td>
                                        {{ $item->categoria }}
                                    </td>
                                    <td>
                                        <a href="{{ route('categorias.edit', $item->id) }}" class="btn btn-primary">Editar</a>
                                        <a href="{{ route('categorias.destroy', $item->id) }}" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection