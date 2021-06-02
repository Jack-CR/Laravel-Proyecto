@extends('layouts.plantilla')

@section('title', 'Agregar Producto')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5  d-flex justify-content-center">
                <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" value="" name="nombre">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Categoria</label>
                        <select class="form-select" name="categoria">
                            <option value="Electronica" selected>Electronica</option>
                            <option value="VideoJuegos">VideoJuegos</option>
                            <option value="Electrodomesticos">Electrodomesticos</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Imagen</label>
                        <img src="" alt="">
                        <input type="file" name="imagen">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 d-flex justify-content-center">
                @if ($errors->any())

                    <div class="alert alert-warning" role="alert">

                        <ol class="list-group list-group-numbered">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item">{{ $error }}
                                </li>
                            @endforeach
                        </ol>
                    </div>

                @endif
            </div>
        </div>
    </div>
@endsection
