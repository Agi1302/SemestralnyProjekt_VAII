<!DOCTYPE html>
<html lang="sk" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{ asset('css/stylHlavnaStranka.css') }}">
    <title>Zamiluj si turistiku</title>
</head>
<body>
<div id="mainNavigation">
    <nav>
        <div class="py-3 text-center border-bottom">
            <img src="{{ asset('Obrazky/logo.png') }}" alt="" class="invert obrazokLoga">
        </div>
    </nav>
    <div class="navbar-expand-md">
        <div class="navbar-dark text-center my-2">
            <button class="navbar-toggler w-75" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <span class="align-middle">Menu</span>
            </button>
        </div>
        <div class="text-center mt-3 collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="align-items-center justify-content-center navbar-nav mx-auto ">

                <li>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Turistické oblasti
                    </a>
                    <ul class="dropdown-menu  dropdown-menuHlavnaStranka" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Vysoké Tatry </a></li>
                        <li><a class="dropdown-item" href="#">Nízke Tatry </a></li>
                        <li><a class="dropdown-item" href="#">Velká Fatra </a></li>
                        <li><a class="dropdown-item" href="#">Malá Fatra </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/ferraty">Ferraty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vodopady">Vodopády</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Úvod</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chaty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fórum</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink2" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Všeobecné
                    </a>
                    <ul class="dropdown-menu dropdown-menuHlavnaStranka" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Prihlásenie</a></li>
                        <li><a class="dropdown-item" href="/registracia">Registrácia</a></li>
                        <li><a class="dropdown-item" href="#">Užitočné odkazy</a></li>
                        <li><a class="dropdown-item" href="#">Q&A</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="content">
    @yield('content') {{-- Obsah stránky --}}
</div>



</body>
</html>
