@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/stylZobrazenieInfo.css') }}">

@endsection


<div class="d-flex flex-column min-vh-100">
    <div class="p-3 text-white navigacnyPanelInfo" style="position: sticky; top: 180px; height: 50vh; width: 30vh; overflow-y: auto;">


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
