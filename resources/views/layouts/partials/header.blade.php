<style>
    .active {
        color: green;
        font-weight: bold;
        text-decoration: none;
    }
</style>

<h1><a href="{{route('home')}}"}}">LOGO</a></h1>
<nav>
    <ul>
        {{-- clase condicional: si la ruta es "tal" aplicá la clase active sino nada --}}
        <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ' '}}">Home</a></li> 
        <li><a href="{{route('about')}}" class="{{request()->routeIs('about') ? 'active' : ' '}}">About Us</a></li>
        <li><a href="{{route('recipes.index')}}" class="{{request()->routeIs('recipes.*') ? 'active' : ' '}}">Recipes</a></li> 
        {{-- el asterísco indica que todas las url que tengan la palabra recipes la tomen como active  --}}
    </ul>
</nav>