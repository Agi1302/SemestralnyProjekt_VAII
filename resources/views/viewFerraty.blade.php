@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/stylFerraty.css') }}">


<!-- Popis ferrat-->

<div class="prazdnyPosunFerratyKarticky"></div>

<div class="container">
    @foreach($ferraty as $index => $ferrata)
        <div class="row justify-content-center">
            <div class="row text-center mb-3 prazdnyPosun"></div>
               @if($index % 3 == 0)
                    <div class="row  odstavec">
                        <div class="col-md-4 mb-4 d-flex align-items-center">
                            <img src="{{asset('Obrazky/Ferraty/'.$ferrata->obrazok)}}" class="img-fluid obrazokFerraty" alt="Popis">
                        </div>

                        <div class="col-md-8 mb-8 d-flex align-items-center">
                            <div class="row-2">
                                <p class="mt-2 kartickaNadpisy">{{ $ferrata->nazov}}</p>
                                <p> {{ $ferrata->text}}</p>
                            </div>
                        </div>
                    </div>

               @endif

                @if($index % 3 == 1)
                    <div class="row align-items-center odstavec">
                        <div class="col-md-8 mb-8 d-flex align-items-center">
                            <div class="row-2">
                                <p class="mt-2 kartickaNadpisy">{{ $ferrata->nazov}}</p>
                                <p> {{ $ferrata->text}}</p>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4 d-flex align-items-center">
                            <img src="{{asset('Obrazky/Ferraty/'.$ferrata->obrazok)}}" class="img-fluid obrazokFerraty" alt="Popis">
                        </div>

                    </div>

                @endif
        </div>
    @endforeach
    </div>



{{--        @if($index % 3 == 2)--}}
{{--            <div class="row  align-items-center odstavec">--}}
{{--                <div class="col-md-4 mb-4">--}}
{{--                    <img src="Obrazky/Ferraty/ferrataSkalka1.jpg" class="img-fluid rounded-start obrazokFerrataMartin  mx-auto d-block"--}}
{{--                         alt="...">--}}
{{--                </div>--}}
{{--                <div class="col-md-4 mb-4">--}}
{{--                    <div class="row-2">--}}
{{--                        <p class="mt-2 kartickaNadpisy">VIA FERRATA SKALKA</p>--}}
{{--                        <p> Ferrata Skalka sa nachádza v Kremnických vrchoch. Je najnáročnejšou a najatraktívnejšou slovenskou--}}
{{--                            ferratou. Pre verejnosť bola otvorená v roku 2017 a v aktuálnej dobe ponúka možnosť výberu z 3 trás.--}}
{{--                            Zatiaľ čo tou najjednoduchšou je Trubačova veža, tak náročnosťou C vás preverí Komín. Navyše, pre--}}
{{--                            skúsených „ferratistov“ je k dispozícii Výzva, ktorá spadá do kategórie E a pýši sa titulom--}}
{{--                            najnáročnejšej ferraty na Slovensku. </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 mb-4">--}}
{{--                    <img src="Obrazky/Ferraty/ferrataSkalka.jpg" class="img-fluid rounded-start obrazokFerrataMartin  mx-auto d-block"--}}
{{--                         alt="...">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        @endif--}}
{{--        @endforeach--}}

    @endsection




