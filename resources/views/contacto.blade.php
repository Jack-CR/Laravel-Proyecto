@extends('layouts.plantilla')

@section('title','Contacto')

@section('container')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <form class="bg-light mt-3" action="{{route('contacto.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="">Nombre:</label>
                      <input type="text" class="form-control" name="name"  aria-describedby="emailHelpId" placeholder="Nombre" value="{{old('name')}}">
                    </div>

                    <div class="form-group">
                        <label for="">Teléfono:</label>
                        <input type="number" class="form-control" name="phone"  aria-describedby="emailHelpId" placeholder="Telefono" value="{{old('phone')}}">
                    </div>

                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" name="email"  aria-describedby="emailHelpId" placeholder="Email" value="{{old('email')}}">
                    </div>

                    <div class="form-group">
                      <label for="">Mensaje:</label>
                      <textarea class="form-control" name="mensaje" id="" rows="3"></textarea>
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ol>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ol>
                 </div>
                 @endif
            </div>
        </div>
    </div>
@endsection