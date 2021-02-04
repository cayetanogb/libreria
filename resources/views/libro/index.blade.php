@extends('layouts.master')

@section('content')
    <div class="row">
        <h1 class="text-center py-3">Lista de libros</h1>
        @foreach ($arrayLibros as $libro)
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <a href="{{route('libro.show', $libro->id)}}">
                    <img src="{{$libro->image}}" style="height: 200px">
                    <h4 style="min-height: 45px; margin: 5px 0 10px 0">
                        {{$libro->name}}
                    </h4>
                </a>
            </div>
        @endforeach
    </div>
@endsection
