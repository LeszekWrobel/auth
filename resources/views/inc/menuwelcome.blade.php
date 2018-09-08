@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/index') }}">Komis</a>
            <a href="{{ url('/add') }}">Dodaj Ogłoszenie</a>
        @else
            <a href="{{ url('/kontakt') }}">Kontakt</a>
            <a href="{{ route('login') }}">Zaloguj</a>
            <a href="{{ route('register') }}">Zarejestruj</a>
        @endauth
    </div>
  @endif
