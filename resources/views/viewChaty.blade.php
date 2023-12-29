@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/stylChaty.css') }}">



    <div class="prazdnyPosunChatyKarticky">

    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">




            @foreach($chaty as $chata)


                <div class="class=textyFerrat" style="margin-bottom: 20px;">
                    <div class="row text-center mb-3 prazdnyPosun"></div>
                    <div class="row align-items-center odstavec">
                        <div class="col-md-5 mb-5 d-flex align-items-center ">
                            <img src="{{asset('Obrazky/Chaty/'.$chata->obrazok)}}" class="img-fluid obrazokChaty" alt="Popis">

                        </div>
                        <div class="col-md-7 mb-7 d-flex align-items-center">
                            <div class="row-2">
                                <p class="mt-2 kartickaNadpisy"></p>
                                <p class="mt-2">{{ $chata->nazov}}</p>
                            </div>
                        </div>
                        <div class="col-md-7 mb-7 d-flex align-items-center">
                            <div class="row-2">
                                <p class="mt-2 kartickaNadpisy"></p>
                                <p class="mt-2">{{ $chata->text}}</p>
                            </div>
                        </div>

                        <div class="col-md-7 mb-7">
                            <div class="row-2">
                                <p class="mt-2">{{ $chata->url}}</p>
                            </div>
                        </div>


                        <div class="col-md-5 mb-5">
                            <img src="Obrazky/Ferraty/ferrataDveVeze.jpg" class="img-fluid rounded-start obrazokFerrataMartin  mx-auto d-block" alt="...">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
