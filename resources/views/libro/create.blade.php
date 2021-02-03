@extends('layouts.master')

@section('content')
    <h1>Crear un libro</h1>
    @if (count($errors) > 0)
        <div class="errors">
            <ul>
                @foreach ($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{url('/libros/create')}}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="name" value="{{old('name')}}">
        </div>

        <div class="form-group">
            <label>Autor</label>
            <input type="text" name="autor" value="{{old('autor')}}">
        </div>

        <div class="form-group">
            <label>ISBN</label>
            <input type="text" name="isbn" value="{{old('isbn')}}">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                Crear libro
            </button>
        </div>

    </form>
@endsection
