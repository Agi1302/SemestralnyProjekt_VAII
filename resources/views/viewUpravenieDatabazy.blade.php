@extends('layouts.app')
@section('content')



    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif



    <link rel="stylesheet" href="{{ asset('css/stylUpravaDatabazy.css') }}">

    <div class="container ">
        <form class="formPridaniaDoDatabazy formPridanie" method="POST" action="{{ route('vrcholy.store') }}">
            @csrf
            <label class="nadpisTabulky">PRIDANIE PRÍSPEVKU</label>
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

                </div>
            </div>
            <button type="submit"  class="nav-item tlacitkoPridaniePrispevku">
                Pridať príspevok
            </button>
        </form>




        <form class="formPridaniaDoDatabazy formMazanie" method="POST" >
            @csrf
            <label class="nadpisTabulky">MAZANIE PRÍSPEVKU</label>
            <div class="row">
                <div class="col-lg-12">

                    <div class="form-group">
                        <label for="region">Názov vrcholu:</label>
                        <label for="nazov"></label>
                        <input type="text" class="form-control" id="nazov" name="nazov" placeholder='názov vrcholu'>
                    </div>


                </div>
            </div>
            <button type="submit"  class="nav-item tlacitkoPridaniePrispevku">
                Zmazať príspevok
            </button>
        </form>




    </div>





@endsection

