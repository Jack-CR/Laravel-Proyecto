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
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center mt-5">
          <h1>Comentarios</h1>
      </div>
      <div class="col-md-12 d-flex justify-content-center">

        <form action="#" method="post">
          @csrf

          <div class="form-group">
            <textarea name="" id="" cols="30" rows="4" name="coment"></textarea>
          </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Comentar</button>
            </div>
            
        </form>
    </div>
    </div>
</div>
@endsection