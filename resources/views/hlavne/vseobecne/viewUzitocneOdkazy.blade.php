@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/stylUzitocneOdkazy.css') }}">



    <h2 class="mt-2 nadpisy">Užitočné odkazy</h2>


<div class="prazdnyPosun">
</div>

<div class="container ">
    <div class="row ">
        <div class="col-sm-6 ">
            <div class="card kartickyOdkazov">
                <div class="card-body">
                    <h5 class="card-title nadpisKarticiek">Telefónne čísla</h5>
                    <p class="card-text">Všeobecné núdzové volania: 112</p>
                    <p class="card-text">Helicopter Emergency Medical Service (HEMS).<br>
                        HEMS Central Dispatch number: 18 155
                    </p>
                    <p class="card-text">Záchranná služba, Prvá pomoc: 155</p>
                    <p class="card-text">Polícia: 158</p>
                    <p class="card-text">Mestská polícia: 159</p>
                    <p class="card-text">Hasiči: 150</p>
                    <p class="card-text">Informácie o telefónnych číslach (Slovensko): 1181</p>
                    <p class="card-text">Bratislava Tourist Information Centres:
                        <br>Telefónne číslo: +421 2 16 186</p>
                    <p class="card-text">Tatra Tourist Information Office Tatranská Lomnica:

                        <br>Adresa: Tatranská Lomnica 98, 059 60 Tatranská Lomnica
                        <br>Telefónne číslo: +421 52 446 81 19
                        <br>Email: lomnica@tatry.sk</p>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="card kartickyOdkazov">
                <div class="card-body">
                    <h5 class="card-title nadpisKarticiek">Webové stránky</h5>
                    <p class="card-text">Požičovne lyží: <br>

                        <br>INTERSPORT Rent ponúka požičovanie lyží na rôznych miestach na Slovensku.
                        <br>Crystal Ski ponúka požičovanie lyží a snowboardov.
                        <br><br><br>Požičovne ferratových setov:<br>

                        <br>Kofler Sport ponúka požičovanie ferratových setov a iného horolezeckého vybavenia.
                        <br>Sport Bruno Riffeser ponúka požičovanie ferratových setov, mačiek a ľadových cepov.
                        <br>Via Ferrata Skalka ponúka požičovanie ferratových setov.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
