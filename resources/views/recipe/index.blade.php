@extends('layouts.plantilla')

@section('title', 'Recipe')

@section('content')
    <h1>Recipes</h1>
    <a href="{{route('recipes.create')}}">Create my own recipe</a>
    <ul>
        @foreach ($recipe as $recipes)
            <li>
                <a href="{{route('recipes.show', $recipes)}}">{{$recipes->name}}</a>
          {{--       <br/>
                {{route('recipes.show', $recipes)}} --}}
            </li>
        @endforeach
    </ul>

    {{$recipe->links()}}
    
@endsection
