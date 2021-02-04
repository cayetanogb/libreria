@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Crear un libro</h1>
                </div>
                <div class="card-body" style="padding:30px">

                    @if (count($errors) > 0)
                        <div class="errors">
                            <ul>
                                @foreach ($errors as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{url('/libro/create')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control">
                        </div><br>

                        <div class="form-group">
                            <label>Autor</label>
                            <input type="text" name="autor" class="form-control">
                        </div><br>

                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="text" name="isbn" class="form-control">
                        </div><br>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="text" name="image" class="form-control">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Crear libro
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
