<style>
    .active {
        color: green;
        font-weight: bold;
        text-decoration: none;
    }
</style>

<header>
    <a href="{{route('home')}}"}}><img src="/assets/logo.png" alt="logo"/></a>
    <nav>
        <ul>
            {{-- clase condicional: si la ruta es "tal" aplicá la clase active sino nada --}}
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ' '}}">Home</a></li> 
            <li><a href="{{route('about')}}" class="{{request()->routeIs('about') ? 'active' : ' '}}">About Us</a></li>
            <li><a href="{{route('recipes.index')}}" class="{{request()->routeIs('recipes.*') ? 'active' : ' '}}">Recipes</a></li> 
            {{-- el asterísco indica que todas las url que tengan la palabra recipes la tomen como active  --}}
            <li><a href="{{route('contact.index')}}" class="{{request()->routeIs('contact') ? 'active' : ' '}}">Contact us</a></li> 
        </ul>
    </nav>
</header>