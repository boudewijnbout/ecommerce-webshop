<header>

    {{-- Logo --}}
    <div class="logo">
        <h1>ECommerce</h1>
    </div>

    {{-- Navigation Menu --}}
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/products">Producten</a>
            </li>
            <li>
                <a href="">Categorieën</a>
            </li>
            <li>
                <a href="">Blog</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
            <li>
                <a href="">Ingelogd als: {{ Auth::user()->name }}</a>
            </li>
        </ul>
    </nav>
</header>
