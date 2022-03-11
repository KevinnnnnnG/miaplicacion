
{{-- Para poder heredas la plantila necesito usar @extends --}}
@extends('layouts.app')

@section('titulo' , 'Crear registro')

@section('contenido')

    <h3 class="text-center">Crear Nuevo Curso/Materia</h3>
    {{-- Se utiliza el atributo enctype para poder subir archivos --}}
    <form action="/curso" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombrecurso">Nombre del curso</label>
            <input type="text" class="form-control" id="nombrecurso"  name="nombre">
        </div>
        <div class="form-group">
            <label for="descripcion">Descipcion del curso</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <div class="form-group">
            <label for="imagen">Cargar imagen</label>
            <br>
            <input type="file" id="imagen" name="imagen">
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
    </form>

@endsection

{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Vistas de registro</title>
    </head>
    <body>
        --}
        {{--Booststrao requiere un div container para mostrar los elementos centrados y ordenados--}}
        {{--
        <div class="container">
            <br>
            <h3 class="text-center">Crear Nuevo Curso</h3>
            <form action="/curso" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombrecurso">Nombre del curso</label>
                    <input type="text" class="form-control" id="nombrecurso"  name="nombre">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descipcion del curso</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion">
                </div>
                <button type="submit" class="btn btn-info">Crear</button>
            </form>
        </div>
    </body>
</html>
--}}

