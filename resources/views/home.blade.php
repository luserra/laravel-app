@extends('layouts.plantilla')

@Push('styles')
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
@endpush

@section('title', 'Recipes World!')

@section('content')
    <h1>Hello Recipes World!</h1>
    <button><a href="{{route('recipes.index')}}">View all</a></button>


@endsection
