@extends('layouts.plantilla')

@section('title','Inicio')


@section('header')
@endsection

@section('container')
<div class="container"></div>
    <div class="row">

        @foreach ($products as $product)

        <div class="col-md-3 p-3">
            <div class="card" style="width: 18rem;">
                <img src="storage/img/posts/{{$product->imagen}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$product->nombre}}</h5>
                  <a href="{{route('product.show',$product->id)}}" class="btn btn-primary">Ver Producto</a>
                </div>
              </div> 
        </div>

        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{$products->links()}}
        </div>
    </div>
</div>
@endsection