@extends('layouts.plantilla')

@section('title','Productos')

@section('container')
<div class="container"></div>
    <div class="row">

        @foreach ($products as $product)

        <div class="col-md-3 p-3">
            <div class="card" style="width: 18rem;">
                <img src="http://127.0.0.1:8000/storage/img/posts/{{$product->imagen}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$product->nombre}}</h5>
                  <a href="{{route('product.show',$product->id)}}" class="btn btn-primary">Ver Producto</a>
                </div>
              </div> 
        </div>

        @endforeach
    </div>
</div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection