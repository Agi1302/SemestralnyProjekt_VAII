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
                        <a href="https://www.intersportrent.com/en">INTERSPORT Rent</a><br>
                        <br>Crystal Ski ponúka požičovanie lyží a snowboardov.<br>
                        <a href="https://www.crystalski.sk/">crystalski</a><br>


                        <br>Požičovňu lyží nájdete v Bratislave, v Trenčíne a na Kubínskej holi.
                        V prípade otázok prosím kontaktujte naše zákaznícke centrum na +421 220 924 810
                        <a href="https://www.najsport.sk/pozicovna-lyzi">NAJŠPORT</a><br>

                        <br>Potrebujete si požičať lyže alebo sa príležitostne chystáte na svah? U nás si lyže
                        nemusíte kupovať, požičiame Vám ich.
                        Ohľadom dostupnosti, alebo ďalších podrobnejších informácií prosíme kontaktujte požičovňu
                        na telefónnom čísle: 052 / 789 40 49, alebo príďte priamo do našej požičovne v predajni v OC
                        Storeland na Teplickej ceste 5 v Poprade.<br>
                        <a href="https://www.sportrysy.sk/pozicovne/pozicovna-lyzi/">sportrysy</a>


                        <br><br>Požičovne ferratových setov:<br>
                        <br>Via Ferrata Skalka ponúka požičovanie ferratových setov.
                        <br><a href="https://www.viaferrataskalka.sk/ferratove-sety/">viaferrataskalka</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
