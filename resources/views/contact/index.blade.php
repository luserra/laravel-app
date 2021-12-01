@extends('layouts.plantilla')

@section('title', 'Contact')

@section('content')
    <h1>Contact us!</h1>

    <form action="{{route('contact.store')}}" method="POST">

        @csrf

        <label>
            Name
            <br/>
            <input type="text" name="name">
        </label>
        <br/>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Email
            <br/>
            <input type="email" name="email">
        </label>
        <br/>

        @error('email')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Phone
            <br/>
            <input type="tel" name="phone">
        </label>
        <br/>

        @error('phone')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Message
            <br/>
            <textarea name="message" rows="5"></textarea>
        </label>
        <br/>

        @error('message')
        <p><strong>{{$message}}</strong></p>
        @enderror

        <br/>
        <button type="submit">Send</button>

    </form>

    {{-- Si hay variable de sesión ejecuto la alerta | a "info" la declaré dentro de store en contactController--}}
    @if (session('info')) 
        <script>
            alert("{{session('info')}}");
        </script>
    @endif

@endsection