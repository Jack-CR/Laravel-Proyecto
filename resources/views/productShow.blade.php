@extends('layouts.plantilla')

@section('title', 'Producto')

@section('container')
    <div class="container">
        <div class="row mt-3"> {{-- SECCION DEL PRODUCTO DEL USUARIO , INFO DE VENDEDOR --}}
            <div class=" col-md-12 d-flex align-items-center">
                <div class="flex-shrink-0">
                    <img class="img-fluid" src="http://127.0.0.1:8000/storage/img/posts/{{ $products->imagen }}"
                        alt="imagen" width="500" height="500">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h1 class="display-6">Información de Vendedor</h1>
                    <label>{{ $products->user->name }}</label>
                </div>
            </div>
        </div>
        <div class="row mt-2">{{-- MÁS PRODUCTOS DEL VENDEDOR --}}
            <!--START GALLERY-->
            @foreach ($products->user->products as $product)
                <div class="col-md-3">


                    <a href="{{ route('product.show', $product->id) }}"><img
                            src="http://127.0.0.1:8000/storage/img/posts/{{ $product->imagen }}" alt=""> </a>
                    <br>


                </div>
            @endforeach
            <!--END GALLERY-->
        </div>
        <div class="row">{{-- COMENTARIOS DE LOS USUARIOS --}}
            <div class="col-md-12 mt-5">
                @foreach ($products->coments as $product)

                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <div class="card text-center">
                            <div class="card-header">
                                {{ $product->user->name }}
                            </div>
                            <div class="card-body">
                                <p class="card-text text-justify">{{ $product->message }}</p>
                            </div>
                            <div class="card-footer text-muted">
                                {{ $product->created_at }}
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        <div class="row mt-2">{{-- FORMULARIO PARA INSERTAR COMENTARIOS --}}
            <div class="col-md-12 d-flex justify-content-center">
                <form action="{{ route('product.coment') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <textarea cols="60" rows="4" name="coment"></textarea>
                    </div>
                    <!--Caputurar el id del producto al que se le esta haciendo el comentario-->
                    <input type="hidden" value="{{ $products->id }}" name="product_id">

                    <div class="form-group">
                        @auth
                            <button class="btn btn-primary" type="submit">Comentar</button>

                        @else
                            <div class="alert alert-primary" role="alert">
                                Debes iniciar sessión o registrarte para poder realizar un comentario
                            </div>
                        @endauth
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
