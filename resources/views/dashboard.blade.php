@extends('layouts.plantilla')

@section('title','Perfil')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <h1 class="display-4">Mis productos</h1>
        </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-2">
        <a href="{{route('dashboard.create')}}"><button class="btn btn-primary">Agregar Producto</button></a>
      </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12 mt-2">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Actualizar</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    
                  <tr>
                    <th scope="row">{{$loop->index}}</th>
                    <td>{{$product->nombre}}</td>
                    <td>{{$product->categoria}}</td>
                    <td><img class="img-responsive" width="200" height="200" src="http://127.0.0.1:8000/storage/img/posts/{{$product->imagen}}" alt=""></td>
                    
                    <td>
                      <form action="{{route('dashboard.destroy',$product->id)}}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="bi bi-x-square-fill "></i></button>

                      </form>
                    </td>
                    <td><a href="{{route('dashboard.edit',$product->id)}}"><i class="bi bi-clipboard btn btn-primary"></i></a></td>
                  </tr>
                
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection