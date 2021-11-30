@extends('layouts.plantilla')

@section('title', 'Edit recipe')

@section('content')
    <h1>In this section you can edit your recipe</h1>
    <form action="{{route('recipes.update', $recipe)}}" method="post">

        @csrf

        @method('put')

        <label>
            Name: 
            <br/>
            <input type="text" name="name" value="{{old('name', $recipe->name)}}">
        </label>
        
       
        @error('name')
            <br/>
            <small>*{{$message}}</small>
            <br/>
        @enderror
        <br/>

        <label>
            Description: 
            <br/>
            <textarea name="description" rows="5" >{{old('description', $recipe->description)}}</textarea>
        </label>
        

        @error('description')
        <br/>
        <small>*{{$message}}</small>
        <br/>
        @enderror
        <br/>
        
        <button type="submit">Upgrade</button>

    </form>
@endsection
