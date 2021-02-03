@extends('layouts.master')

@section('content')
    <h1>{{$libro->name}}</h1>
    <p>Por: {{$libro->autor}}</p>
    <p>ISBN: {{$libro->isbn}}</p>
@endsection