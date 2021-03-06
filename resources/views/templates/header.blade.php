<div class="container">
    <div class="header-logo">
        <a href="{{ route('homepage') }}"><img src="/img/dc-logo.png"" alt="dc-logo"></a>
    </div>

    <nav>
        <ul>
        <li><a href="">CHARACTERS</a></li>
        <li class="{{ Request::route()->getName() === 'comic' ? 'active' : '' }}"><a href="">COMICS</a></li>
        <li><a href="">MOVIES</a></li>
        <li><a href="">TV</a></li>
        <li><a href="">GAMES</a></li>
        <li><a href="">COLLECTIBLES</a></li>
        <li><a href="">VIDEOS</a></li>
        <li><a href="">FANS</a></li>
        <li><a href="">NEWS</a></li>
        <li><a href="">SHOP</a></li>
        </ul>
    </nav>

    <div class="search-field">
        <input type="text" placeholder="Search">
    
        <i class="fas fa-search"></i>
    </div>
</div>