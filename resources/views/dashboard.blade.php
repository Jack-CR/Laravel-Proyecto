@extends('layouts.plantilla')

@section('title','Perfil')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Imagen</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    
                  <tr>
                    <th scope="row"></th>
                    <td>{{$product->nombre}}</td>
                    <td>{{$product->categoria}}</td>
                    <td><img class="img-responsive" width="200" height="200" src="http://127.0.0.1:8000/storage/img/posts/{{$product->imagen}}" alt=""></td>
                  </tr>
                
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection