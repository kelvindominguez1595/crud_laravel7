@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-header">
                <i class="fa fa-save"></i> Registrar categorias
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('categorias') }}" method="POST">
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input type="text" name="categoria" class="form-control" placeholder="Categoria">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection