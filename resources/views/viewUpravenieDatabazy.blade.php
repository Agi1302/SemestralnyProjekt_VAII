@extends('layouts.app')
@section('content')



    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <link rel="stylesheet" href="{{ asset('css/stylUpravaDatabazy.css') }}">

    <div class="container ">
        <form class="formPridaniaDoDatabazy formPridanie" method="POST" action="/pridajPrispevok">
            @csrf
            <label class="nadpisTabulky">PRIDANIE PRÍSPEVKU VRCHOLU</label>
            <div class="row">
                <div class="col-lg-6">
                    <!-- Prvý stĺpec -->
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
                        <label for="pohorie">Obrázok:</label>
                        <input type="text" class="form-control" id="obrazok" name="obrazok" placeholder='url obrázka'>
                    </div>

                </div>
                <div class="col-lg-6">
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
                            <option class="moznost" value="ANO">ANO</option>
                            <option class="moznost" value="NIE">NIE</option>
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

                </div>
            </div>
            <button type="submit"  class="nav-item tlacitkoPridaniePrispevku">
                Pridať príspevok
            </button>
        </form>
    </div>





    <div class="container">
        <form class="formPridaniaDoDatabazy formPridanieChaty" method="POST" action="/pridajPrispevokChaty">
            @csrf
            <label class="nadpisTabulky">PRIDANIE PRÍSPEVKU CHATY</label>
            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Prvý stĺpec -->
                    <div class="form-group">
                        <label for="nazov_chaty>">Názov chaty:</label>
                        <input type="text" class="form-control" id="nazov" name="nazov" placeholder='Názov chaty'>
                    </div>
                    <div class="form-group">
                        <label for="obrazok">Obrázok:</label>
                        <label for="obrazok"></label><input type="text" class="form-control" id="obrazok" name="obrazok" placeholder='URL obrázka'>
                    </div>

                    <div class="form-group">
                        <label for="obrazok">URL_Obrazka:</label>
                        <label for="obrazok"></label><input type="text" class="form-control" id="url" name="url" placeholder='URL obrázka'>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group ">
                        <label for="text">Text:</label>
                        <label for="textChaty"></label><input type="text" class="form-control textChaty" id="text" name="text" placeholder='zadajte text'>
                    </div>
                </div>
            </div>
            <button type="submit"  class="nav-item tlacitkoPridaniePrispevku">
                Pridať príspevok
            </button>
        </form>
    </div>


    <div class="container">
        <form class="formPridaniaDoDatabazy formPridanieFerraty" method="POST" action="/pridajPrispevokFerraty">
            @csrf
            <label class="nadpisTabulky">PRIDANIE PRÍSPEVKU FERRATY</label>
            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Prvý stĺpec -->
                    <div class="form-group">
                        <label for="nazov_ferraty>">Názov ferraty:</label>
                        <input type="text" class="form-control" id="nazov" name="nazov" placeholder='Názov ferraty'>
                    </div>
                    <div class="form-group">
                        <label for="obrazok">Obrázok:</label>
                        <label for="obrazok"></label><input type="text" class="form-control" id="obrazok" name="obrazok" placeholder='URL obrázka'>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group ">
                        <label for="text">Text:</label>
                        <label for="textFerraty"></label><input type="text" class="form-control textFerraty" id="text" name="text" placeholder='zadajte text'>
                    </div>
                </div>
            </div>
            <button type="submit"  class="nav-item tlacitkoPridaniePrispevku">
                Pridať príspevok
            </button>
        </form>
    </div>


    <div class="container">
        <form class="formPridaniaDoDatabazy formPridanieFerraty" method="POST" action="/pridajPrispevokVodopady">
            @csrf
            <label class="nadpisTabulky">PRIDANIE PRÍSPEVKU VODOPÁDU</label>
            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Prvý stĺpec -->
                    <div class="form-group">
                        <label for="nazov_vodopadu>">Názov vodopádu:</label>
                        <label for="nazov"></label><input type="text" class="form-control" id="nazov" name="nazov" placeholder='Názov vodopadu'>
                    </div>
                    <div class="form-group">
                        <label for="obrazok">Obrázok:</label>
                        <label for="obrazok"></label><input type="text" class="form-control" id="obrazok" name="obrazok" placeholder='URL obrázka'>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group ">
                        <label for="text">Text:</label>
                        <label for="textVodopadu"></label><input type="text" class="form-control textFerraty" id="text" name="text" placeholder='zadajte text'>
                    </div>
                </div>
            </div>
            <button type="submit"  class="nav-item tlacitkoPridaniePrispevku">
                Pridať príspevok
            </button>
        </form>
    </div>




@endsection

