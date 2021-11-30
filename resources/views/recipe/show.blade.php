@extends('layouts.plantilla')

@section('title', $recipe)


@section('content')

    <h1>In this section you can see one recipe...</h1>
    <h2>And it is: {{$recipe->name}}</h2>
    <p><strong>Description: </strong>{{$recipe->description}}</p>
    <br/>
    <a href="{{route('recipes.index')}}">Go back to all recipes</a>
    <br/>
   <a href="{{route('recipes.edit', $recipe)}}">Edit recipe</a>
    <br/>
    
    <form action="{{route('recipes.destroy', $recipe)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form> 

@endsection
