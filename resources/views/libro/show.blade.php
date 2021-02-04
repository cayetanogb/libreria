@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-4">
             <img src="{{$libro->image}}">
        </div>
        <div class="col-sm-8">
             <h4>{{$libro->name}}</h4>
             <p>Autor: {{$libro->autor}}</p>
             <p>ISBN: {{$libro->isbn}}</p>

             <a href="{{route('edit', $libro->id)}}" class="btn btn-warning">Editar pelicula</a>
             <a href="{{route('libro')}}" class="btn btn-light">Volver al listado</a>
        </div>
   </div>
@endsection
