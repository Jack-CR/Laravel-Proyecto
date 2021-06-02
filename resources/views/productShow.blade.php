@extends('layouts.plantilla')

@section('title','Producto')

@section('container')
<div class="container">
    <div class="row">
           <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <img src="http://127.0.0.1:8000/storage/img/posts/{{$products->imagen}}" alt="imagen" width="500" height="600">
            </div>
            <div class="flex-grow-1 ms-3">
             <h1 class="display-6">Información de Vendedor</h1>
                <label >{{$products->user->name}}</label>
            </div>
          </div>
    </div>
    <div class="row mt-5">
      @foreach ($products->coments as $product)

      <div class="col-md-12 d-flex justify-content-center mt-2">
        <div class="card text-center">
          <div class="card-header">
            {{$product->user->name}}
          </div>
          <div class="card-body">
            <p class="card-text text-justify">{{$product->message}}</p>
          </div>
          <div class="card-footer text-muted">
            {{$product->created_at}}
          </div>
        </div>
      </div>

      @endforeach

      <div class="row mt-2">
        <div class="col-md-12 d-flex justify-content-center">

          <form  action="{{route('product.coment')}}" method="POST">
            @csrf

            <div class="form-group">
              <textarea  cols="60" rows="4" name="coment"></textarea>
            </div>
            <!--Caputurar el id del producto al que se le esta haciendo el comentario-->
            <input type="hidden" value="{{$products->id}}" name="id_product">
            
              <div class="form-group">
                <button class="btn btn-primary" type="submit">Comentar</button>
              </div>
              
          </form>
      </div>
    </div>
    </div>
</div>
@endsection