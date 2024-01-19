@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/stylZobrazenieInfo.css') }}">

@endsection




<div class="container">
    <div class="row">
        <!-- Navigačný panel -->
        <div class="col-lg-2 stlpecSTextom">
            <div>
                <div class="p-3 text-white navigacnyPanelInfo2" style="position: sticky; top: 180px; height: 50vh; width: 30vh; overflow-y: auto;">
                    <h3 class="mb-3 nadpisMojUcet">Môj účet</h3>

                    <!-- Položky menu -->
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
                            <a href="/zmenaHesla" class="nav-link text-white">
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
            <form class="formOpravnyFormular">
                <div class="form-group">
                    <label for="firstName">Meno:</label>
                    <input type="text" class="form-control" id="firstName" placeholder={{ Auth::user()->meno }}>
                </div>
                <div class="form-group">
                    <label for="lastName">Priezvisko:</label>
                    <input type="text" class="form-control" id="lastName" placeholder={{ Auth::user()->priezvisko }}>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder={{ Auth::user()->email }}>
                </div>


                <button class="nav-item tlacitkoZmenaHesla">
                    <a href="#" class="nav-link text-white">
                        <i></i> Uložiť zmenené údaje
                    </a>
                </button>


                <button class="nav-item tlacitkoZmenaHesla">
                    <a href="/zmenaHesla" class="nav-link text-white">
                        <i class="bi bi-key-fill"></i> Zmena hesla
                    </a>
                </button>
            </form>
        </div>
    </div>
</div>



























