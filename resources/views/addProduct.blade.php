@extends('layouts.plantilla')

@section('title','Agregar Producto')

@section('container')
<div class="container  d-flex justify-content-center">
    <div class="row">
        <div class="col-md-8 mt-5">
            <form action="" method="POST">

                @csrf
                @method('PUT')


                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nombre</label>
                  <input type="text" class="form-control" value="" name="nombre">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Categoria</label>
                    <select class="form-select" name="categoria" >
                        <option value="Electronica" selected>Electronica</option>
                        <option value="VideoJuegos">VideoJuegos</option>
                        <option value="Electrodomesticos">Electrodomesticos</option>
                      </select>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Imagen</label>
                    <img src="" alt="">
                    <input type="file">
                  </div>
               
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </form>
        </div>
    </div>
</div>
@endsection