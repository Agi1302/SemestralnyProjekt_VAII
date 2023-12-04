@extends('layouts.app')
@section('content')


    @if(session('/pridajPrispevok'))
        <div class="alert alert-success">
            {{ session('Príspevok bol úspešne pridaný') }}
        </div>
    @endif


    <link rel="stylesheet" href="{{ asset('css/stylUpravaDatabazy.css') }}">


    <div class="container">
        <div class="row">
            <!-- Navigačný panel -->
            <div class="col-lg-8 ">

                <form class="formPridaniaDoDatabazy formPridanie" method="POST" action="{{ route('vrcholy.store') }}">
                    @csrf
                    <label class="nadpisTabulky1">PRIDANIE PRÍSPEVKU</label>
                    <div class="form-group">
                        <label for="nazov_vrcholu">Názov vrcholu:</label>
                        <input type="text" class="form-control" id="nazov_vrcholu" name="nazov_vrcholu" placeholder='vrchol názov'>
                    </div>
                    <div class="form-group">
                        <label for="nazov_vrcholu">Štát:</label>
                        <label for="stat"></label><input type="text" class="form-control" id="stat" name="stat" placeholder='štát'>
                    </div>

                    <div class="form-group">
                        <label for="region">Okres:</label>
                        <input type="text" class="form-control" id="okres" name="okres" placeholder='názov okresu'>
                    </div>


                    <div class="form-group">
                        <label for="nadmorska_vyska_vrcholu">Nadmorská výška vrcholu:</label>
                        <input type="text" class="form-control" id="nadmorska_vyska" name="nadmorska_vyska" placeholder='m.n.m'>
                    </div>

                    <div class="form-group">
                        <label for="pohorie">Pohorie:</label>
                        <input type="text" class="form-control" id="pohorie" name="pohorie" placeholder='názov pohoria'>
                    </div>

                    <div class="form-group">
                        <label for="region">Najľahší výstup z:</label>
                        <input type="text" class="form-control" id="vystup_z" name="vystup_z" placeholder='najľahší výstup z'>
                    </div>

                    <div class="form-group">
                        <label for="typ_tury">Typ túry:</label>
                        <select class="form-control" id="typ_tury" name="typ_tury">
                            <option class="moznost" value="horska">Horská</option>
                            <option class="moznost" value="oddychova">Oddychová</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="narocnost">Náročnosť:</label>
                        <select class="form-control" id="narocnost" name="narocnost">
                            <option class="moznost" value="lahka">Ľahká</option>
                            <option class="moznost" value="stredna">Stredná</option>
                            <option class="moznost" value="tazka">Ťažká</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="dostupne_v_zime">Dostupné v zime:</label>
                        <select class="form-control" id="dostupne_v_zime" name="dostupne_v_zime">
                            <option class="moznost" value="ano">ano</option>
                            <option class="moznost" value="nie">nie</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dlzka_trasy">Dĺžka trasy:</label>
                        <select class="form-control" id="dlzka_trasy" name="dlzka_trasy">
                            <option class="moznost" value="1-5">1-5 km</option>
                            <option class="moznost" value="5-10">5-10 km</option>
                            <option class="moznost" value="10+">10+ km</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dostupnost">Dostupnosť:</label>
                        <select class="form-control" id="dostupnost" name="dostupnost">
                            <option class="moznost" value="bez_vodcu">Bez vodcu</option>
                            <option class="moznost" value="s_vodcom">S vodcom</option>
                        </select>
                    </div>















                    <button type="submit"  class="nav-item tlacitkoZmenaHesla">
                        Pridať príspevok
                    </button>
                </form>
            </div>

            <div class="col-lg-4 ">

                <form class="formPridaniaDoDatabazy  ">
                    <label class="nadpisTabulky2">ZMAZANIE PRÍSPEVKU</label>
                    <div class="form-group">
                        <label for="firstName">Názov vrcholu:</label>
                        <input type="text" class="form-control" id="firstName" placeholder='vrchol názov'>
                    </div>










                    <button class="nav-item tlacitkoZmenaHesla">
                        <a href="/nieco" class="nav-link text-white">
                            <i></i> Zmazať príspevok
                        </a>
                    </button>
                </form>
            </div>



        </div>
    </div>


@endsection




{{--@extends('layouts.app')--}}
{{--@section('content')--}}

{{--<link rel="stylesheet" href="{{ asset('css/stylUpravaDatabazy.css') }}">--}}


{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <!-- Navigačný panel -->--}}
{{--        <div class="col-lg-8 ">--}}

{{--            <form class="formPridaniaDoDatabazy formPridanie" method="POST" action="{{ route('vrcholy.store') }}">--}}
{{--                @csrf--}}
{{--                <label class="nadpisTabulky1">PRIDANIE PRÍSPEVKU</label>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="nazov_vrcholu">Názov vrcholu:</label>--}}
{{--                    <input type="text" class="form-control" id="nazov_vrcholu" name="nazov_vrcholu" placeholder='vrchol názov'>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="stat">Štát:</label>--}}
{{--                    <input type="text" class="form-control" id="stat" name="stat" placeholder='štát'>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="okres">Okres:</label>--}}
{{--                    <input type="text" class="form-control" id="okres" name="okres" placeholder='názov okresu'>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="nadmorska_vyska_vrcholu">Nadmorská výška vrcholu:</label>--}}
{{--                    <input type="text" class="form-control" id="nadmorska_vyska_vrcholu" name="nadmorska_vyska_vrcholu" placeholder='m.n.m'>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="pohorie">Pohorie:</label>--}}
{{--                    <input type="text" class="form-control" id="pohorie" name="pohorie" placeholder='názov pohoria'>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="vystup_z">Najľahší výstup z:</label>--}}
{{--                    <input type="text" class="form-control" id="vystup_z" name="vystup_z" placeholder='najľahší výstup z'>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="typ_tury">Typ túry:</label>--}}
{{--                    <select class="form-control" id="typ_tury" name="typ_tury">--}}
{{--                        <option class="moznost" value="horska">Horská</option>--}}
{{--                        <option class="moznost" value="oddychova">Oddychová</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="narocnost">Náročnosť:</label>--}}
{{--                    <select class="form-control" id="narocnost" name="narocnost">--}}
{{--                        <option class="moznost" value="lahka">Ľahká</option>--}}
{{--                        <option class="moznost" value="stredna">Stredná</option>--}}
{{--                        <option class="moznost" value="tazka">Ťažká</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="dostupne_v_zime">Dostupné v zime:</label>--}}
{{--                    <select class="form-control" id="dostupne_v_zime" name="dostupne_v_zime">--}}
{{--                        <option class="moznost" value="ano">ano</option>--}}
{{--                        <option class="moznost" value="nie">nie</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="dlzka_trasy">Dĺžka trasy:</label>--}}
{{--                    <select class="form-control" id="dlzka_trasy" name="dlzka_trasy">--}}
{{--                        <option class="moznost" value="1-5">1-5 km</option>--}}
{{--                        <option class="moznost" value="5-10">5-10 km</option>--}}
{{--                        <option class="moznost" value="10+">10+ km</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="dostupnost">Dostupnosť:</label>--}}
{{--                    <select class="form-control" id="dostupnost" name="dostupnost">--}}
{{--                        <option class="moznost" value="bez_vodcu">Bez vodcu</option>--}}
{{--                        <option class="moznost" value="s_vodcom">S vodcom</option>--}}
{{--                    </select>--}}
{{--                </div>--}}

{{--                <button class="nav-item ">--}}
{{--                    <a href="/pridajPrispevok" class="nav-link text-white">--}}
{{--                        <i></i> Pridať príspevok--}}
{{--                    </a>--}}
{{--                </button>--}}

{{--                <button type="submit"  class="nav-item tlacitkoZmenaHesla">--}}
{{--                    --}}
{{--                </button>--}}
{{--            </form>--}}


{{--        </div>--}}

{{--        <div class="col-lg-4 ">--}}

{{--            <form class="formPridaniaDoDatabazy  ">--}}
{{--                <label class="nadpisTabulky2">ZMAZANIE PRÍSPEVKU</label>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="firstName">Názov vrcholu:</label>--}}
{{--                    <input type="text" class="form-control" id="firstName" placeholder='vrchol názov'>--}}
{{--                </div>--}}


{{--                <button class="nav-item tlacitkoZmenaHesla">--}}
{{--                    <a href="/nieco" class="nav-link text-white">--}}
{{--                        <i></i> Zmazať príspevok--}}
{{--                    </a>--}}
{{--                </button>--}}
{{--            </form>--}}
{{--        </div>--}}



{{--    </div>--}}
{{--</div>--}}










{{--@endsection--}}
