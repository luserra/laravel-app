@extends('layouts.plantilla')

@section('title', 'Recipes website')

@section('content')
    <h1>Hello Recipes World!</h1>
    <button><a href="{{route('recipes.index')}}">View all</a></button>


@endsection
