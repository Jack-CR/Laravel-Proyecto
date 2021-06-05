@extends('layouts.plantilla')

@section('title', 'Inicio')


@section('header')
@endsection

@section('container')
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-3">
                <h1 class="display-6">Categorías</h1>
                <ol class="list-group list-group-numbered">

                    @foreach ($category as $categories)

                        <form action="{{route('product.categoria',$categories->id)}}" method="get">
                            @csrf

                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <input type="hidden" value="{{$categories->id}}" name="id">
                                    <div class="fw-bold"><button type="submit"> {{ $categories->nombre }}</button></div>
                                </div>
                            </li>
                        </form>

                    @endforeach

                </ol>
            </div>
            @foreach ($products as $product)

                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="storage/img/posts/{{ $product->imagen }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->nombre }}</h5>
                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">Ver Producto</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
