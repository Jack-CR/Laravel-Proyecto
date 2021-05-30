@extends('layouts.plantilla')

@section('title','Producto')

@section('container')
<div class="container"></div>
    <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="http://127.0.0.1:8000/storage/img/posts/{{$products->imagen}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$products->nombre}}</h5>
                    </div>
                  </div> 
           </div>
    </div>
</div>
@endsection