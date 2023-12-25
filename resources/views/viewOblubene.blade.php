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
                            <a href="#" class="nav-link text-white">
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
            </div>
        </div>



<div class="row justify-content-center">

@foreach($vrcholy as $vrchol)
    <div class="col-lg-4 mb-4">
        <div class="karticka">

            <form method="POST" action="{{ route('favourite.pridanieOdobranieFavourite', $vrchol) }}" class="favourite-form">
                @csrf
                @auth
                    <button type="submit" class="srdiecko">

                        <i class="bi bi-heart"></i>

                    </button>
                @endauth
            </form>


            <p class="mt-2 kartickaNadpisy">{{$vrchol->nazov_vrchola}}</p>
            <img src="{{asset('Obrazky/LomnickyStit.jpg')}}" class="img-fluid" alt="Popis">
            <p class="mt-2">Názov vrcholu: {{ $vrchol->nazov_vrcholu}}</p>
            <p class="mt-2">Štát: {{ $vrchol->stat}}</p>
            <p class="mt-2">Okres: {{ $vrchol->okres}}</p>
            <p class="mt-2">Nadmorská výška: {{ $vrchol->nadmorska_vyska}}</p>
            <p class="mt-2">Pohorie: {{ $vrchol->pohorie}}</p>

            @auth
                @if(Auth::user()->email == "adminadmin@gmail.com")
                    <div class="row">
                        <div class="col-lg-6 mb-6">
                            <form method="POST" action="/vrchol/{{ $vrchol->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100">Zmazať príspevok</button>
                            </form>
                        </div>

                        <div class="col-lg-6 mb-6">
                            <a type="submit" class="btn btn-primary aplikovatTlac align-content-center w-100 " href="{{'/viewEditovaniePrispevku/'.$vrchol->id}}">Editovanie príspevku</a>
                        </div>
                    </div>


                @endif
            @endauth
        </div>
    </div>
    @endforeach
    </div>
