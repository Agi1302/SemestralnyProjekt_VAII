@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/stylZobrazenieInfo.css') }}">

@endsection

<div class="container">
    <div class="row">

        <div class="col-lg-2 stlpecSTextom">
            <div>
                <div class="p-3 text-white navigacnyPanelInfo2" style="position: sticky; top: 180px; height: 50vh; width: 30vh; overflow-y: auto;">

                    <h3 class="mb-3 nadpisMojUcet">Môj účet</h3>

                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="/oblubenePrispevky" class="nav-link text-white">
                                <i class="bi bi-heart-fill"></i> Oblúbené
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/absolvovanePrispevky" class="nav-link text-white">
                                <i class="bi bi-check-circle-fill"></i> Absolvované
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/zmenaNastaveni" class="nav-link text-white">
                                <i class="bi bi-gear-fill"></i> Nastavenia
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="bi bi-key-fill"></i> Zmena hesla
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/odhlasenie" class="nav-link text-white">
                                <i class="bi bi-box-arrow-right"></i> Odhlásiť sa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Formulár -->
        <div class="col-lg-10 pravyStlpecImg">
            <form class="formOpravnyFormular" method="POST" action="{{ route('update-password') }}">
                @csrf

                <div class="form-group">
                    <label for="old_password">Zadajte staré heslo:</label>
                    <input type="password" class="form-control" id="old_password" placeholder="Zadajte heslo *" name="old_password" required>
                </div>

                <div class="form-group">
                    <label for="new_password">Zadajte nové heslo:</label>
                    <input type="password" class="form-control" id="new_password" placeholder="Zadajte heslo *" name="new_password" required>
                </div>
                <div class="form-group">
                    <label for="new_password_confirmation">Potvdenie nového hesla:</label>
                    <input type="password" class="form-control" id="new_password_confirmation" placeholder="Potvrdenie hesla *" name="new_password_confirmation" required>
                </div>
                <button class="nav-item tlacitkoZmenaHesla">
                    <i></i> Potvrdenie zmeny hesla
                </button>
            </form>

        </div>
    </div>
</div>



























