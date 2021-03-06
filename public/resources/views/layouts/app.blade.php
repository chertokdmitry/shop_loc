<!doctype html>
<html lang="{{ app()->getLocale() }}">
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link href="{{ asset('public/css/album.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('public/css/dashboard.css') }}" rel="stylesheet" type="text/css" >
    <title>Laravel Shop</title>
</head>

<body>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANBSURBVFhH7ZRdSFNhGMdP4BTCq6DbLuq28iqIyIuMpILKLoKQLusu6KK0m4ggsqCLNEIvLD8yKwU/cNvZyk23nQ2d+1A356ZuYB8GaTcGYl+cp/Oc3nP2vjvrbKyhC84f/vDuvP/n+f/YxuEMGSpFhePJnulEMriljiefk/rckgYAHZhbgOD8onwOxZfAP5eQz+jJSBzC0jPlczFM6nMLw76ZGDx+OQytfWYZsmPIDi29Q+D0T4PZPQHNLwahz+7KWlSoSX1uYdgTisgQCInfZFu/Rf78xheAAYcgn3vMjqxFhZrU55YygJD4TeLZH03AeGBWPuNP65yahmDsz89fLJP63Mo2vBUm9foSBVMVuCtAsejZCff5WrhlrlH9xXdIvUfPC6eYe3RYOMNkcIa+x524m85gN8H4u0R3RTM9tO49yCxGb3r3MovzAcSZzAzupjPYTTCyC4KcSXSVr9JDCe9JZulta420qJJZnA8gzuAsncHdTAa7JQaCo5XoLj9HD6At4+eZpS3208w9Oh9ANM7SGdydmUEGgqOV6KoYZsLSf+Se9Tiz9LWjjlmIzhcQZ+kM7tb8DyUGgsNK9FTuli5/0eF11z5mIdo3Ws0sRCfGDmtyUecRTc77tlqTww46gwzIQrDSEkfKGkTeJAJvAsULlgNwrfco4+hIlXqvOG7W5ubM2hzOZuYWLfuZDDKIlrIbBCst6OTqoIsD2l5bA1x4WMUYn2XmBFtjwTkff12TE7u4swQrLQBuh3TxVAl9HKqDcGIRmvrTS/GMz9Zs9eoyPP9rbkXqUnJiJ9eOLARLK7Gd28U7bDA6EVLf8BPRGdn0Wz8SC8mmnxWawy7sxG6Coa/hMZ8K6JwMSa8Dr65dgXTZzEIKoqkPeXl26Z0KiJ2kPrdowMamR3Ci/rKum1qfqYCR1HsIfvoB3eENXQ/ENiH5+ev2AHaENmDPgxVdH2tfNQBVG4CZ+i8Bay9d0YApLgnAO086NGCKSwLwblu3BkxxJmBs7Sc4Ut90LSx/Ly7gxas3NWCKacBCXBRAPRuAmSp5QKvHD1bBD7wwBa94J3QN8rrut7vkbKHGLuwk9bll9UxubIdJvSFDJSSO+w1i4H5PA6AqGQAAAABJRU5ErkJggg==">
        Laravel Shop
    </a>

    <div class="container">
        <form action="/search" method="get" class="form-inline mt-2 mt-md-0">
            <input  name="query" class="form-control mr-sm-2 form-control-dark " type="text" placeholder="Поиск" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Найти</button>
        </form>
    </div>

    <ul class="navbar-nav px-3" >

        <!-- Authentication Links -->
        @guest
            <div class="btn-group mr-2">
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Войти</a>
            </div>
        @else
            <div class="btn-group mr-2">
                <a class="btn btn-sm btn-outline-secondary" href="/home">
                    Панель управления
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Выйти
                </a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </ul>
</nav>

            @section('content')

            @show

@section('footer')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
@show


