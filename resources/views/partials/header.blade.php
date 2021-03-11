<header>
    <div id="logo-pasta">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </div>
    <div class="navbar">
        <ul>
            <li><a href="{{ route('homepage') }}" class="{{ (Request::route()->getName() == 'homepage') ? 'active' : ''}}">Home</a></li>
            <li><a href="{{ route('pagina-prodotti') }}" class="{{ (Request::route()->getName() == 'pagina-prodotti') ? 'active' : ''}}">Prodotti</a></li>
            <li><a href="{{ route('pagina-news') }}" class="{{ (Request::route()->getName() == 'pagina-news') ? 'active' : ''}}">News</a></li>
        </ul>
    </div>
</header>