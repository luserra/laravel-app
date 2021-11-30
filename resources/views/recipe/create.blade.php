@extends('layouts.plantilla')

@section('title', 'Create recipe')

@section('content')
    <h1>In this section you can create your recipe</h1>
    <form action="{{route('recipes.store')}}" method="post">

        @csrf 

        <label>
            Name: 
            <br/>
            <input type="text" name="name" value="{{old('name')}}">
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
            <textarea name="description" rows="5" placeholder="Write the process">{{old('description')}}</textarea>
        </label>
        
        @error('description')
            <br/>
            <small>*{{$message}}</small>
            <br/>
        @enderror
        <br/>

        <button type="submit">Submit</button>

    </form>
@endsection

