<header>
    <nav class="container">
        <div class="navbar-logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC Comics">
        </div>
        <div class="navbar-links">
            <ul>
                @foreach(config('header_links') as $link)
                <li>
                    <a href="{{ route($link['route_name']) }}" class="{{ Route::is($link['route_name']) ? 'active' : '' }}">{{ $link['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>