@extends('layouts.plantilla')

@section('title','Actualizar Producto')

@section('container')
<div class="container  d-flex justify-content-center">
    <div class="row">
        <div class="col-md-8 mt-5">
            <form action="{{route('dashboard.update',$products)}}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')


                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nombre</label>
                  <input type="text" class="form-control" value="{{$products->nombre}}" name="nombre">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Categoria</label>
                    <select class="form-select" name="categoria" >
                      
                      @foreach ($category as $categories)

                        <option value="{{$categories->nombre}}" selected>{{$categories->nombre}}</option>

                      @endforeach
                      </select>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Imagen</label>
                    <img src="http://127.0.0.1:8000/storage/img/posts/{{$products->imagen}}" alt="imagen" width="300" height="200px">
                    <input type="file" name="imagen">
                  </div>
               
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </form>
        </div>
    </div>
</div>
@endsection