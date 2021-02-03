@extends('layouts.master')

@section('content')
    <div class="row">
        @foreach ($libros as $libro)
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <a href="{{ url('/libros/show/'.$libro->id)}}">
                    <img src="{{$libro->img}}" style="height: 200px">
                    <h4 style="min-height: 45px; margin: 5px 0 10px 0">
                        {{$libro->name}}
                    </h4>
                </a>
            </div>
        @endforeach
    </div>
@endsection
