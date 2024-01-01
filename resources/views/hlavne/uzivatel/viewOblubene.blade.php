@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/stylZobrazenieInfo.css') }}">

@endsection



<div class="row">

    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3 text-white navigacnyPanelInfo" style="position: fixed; top: 180px; height: 50vh; overflow-y: auto; z-index: 1;">
            <!-- Logo alebo názov stránky -->
            <h3 class="nadpisMojUcet">Môj účet</h3>

        <!-- Položky menu -->
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/oblubenePrispevky" class="nav-link text-white">
                    <i class="bi bi-heart-fill"></i> Oblúbené
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-check-circle-fill"></i> Absolvované
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-star-fill"></i> Moje hodnotenia
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-chat-square-text-fill"></i> Moje komentáre
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

        <div class="col-12 offset-sm-6 offset-md-4 offset-lg-3 col-lg-8">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    @foreach($favourites as $favourite)

                        <div class="col-12 col-lg-4 mb-4">
                            <div class="karticka oblubeneKarticky">

                                <p class="mt-2 kartickaNadpisy">{{$favourite->nazov_vrchola}}</p>
                                <img src="{{asset('Obrazky/Vrcholy/'.$favourite->obrazok)}}" class="img-fluid" alt="Popis">
                                <p class="mt-2">Názov vrcholu: {{ $favourite->nazov_vrcholu}}</p>
                                <p class="mt-2">Štát: {{ $favourite->stat}}</p>
                                <p class="mt-2">Okres: {{ $favourite->okres}}</p>
                                <p class="mt-2">Nadmorská výška: {{ $favourite->nadmorska_vyska}}</p>
                                <p class="mt-2">Pohorie: {{ $favourite->pohorie}}</p>

                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
