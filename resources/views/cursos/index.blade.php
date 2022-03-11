
@extends('layouts.app')

@section('titulo' , 'Listados de cursos')

@section('contenido')

<h3 class="text-center">Listado de Cursos Disponibles</h3>
<br>
    {{--Foreach es un ciclo o bucle especal para trabajar con arrays --}}
    {{-- recorderis: existen ciclos while , for , do while , foreach --}}
    <div class="row"> {{-- ya tenemos la fila--}}

    @foreach ( $cursito as $kev )

        <div class="col-sm"> {{-- Ya tenemos la columna--}}
            <div class="card" style="width: 18rem; margin-top: 4rem">
                <img alt="..." height="100px" width="50px" sytle="margin:20px" class="card-img-top mx-auto d-block" src="{{Storage::url($kev->imagen) }}">
                <div class="card-body">
                    <h5 class="card-title">{{$kev->nombre}}</h5>
                    <p class="card-text">{{$kev->descripcion}}</p>
                    <a href="#" class="btn btn-success text-">Ver mas</a>
                </div>
            </div>
        </div>

        {{-- Para llamar informacion de php basta con interpolar las variables usando la doble llave --}}
    @endforeach
    </div>{{-- Cierro el div row--}}

@endsection

