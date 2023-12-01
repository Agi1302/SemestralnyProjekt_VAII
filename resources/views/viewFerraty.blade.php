@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/stylFerraty.css') }}">


<!-- Popis ferrat-->


<div class="textyFerrat">
    <div class="row text-center mb-3">
        <p class="nadpis">Ferraty</p>
    </div>
    <div class="row align-items-center odstavec">

        <div class="col-md-4 mb-4 d-flex align-items-center">
            <img src="Obrazky/ferrataMartin.jpg" class="img-fluid rounded-start obrazokFerrataMartin  mx-auto d-block"
                 alt="...">
        </div>

        <div class="col-md-8 mb-8 d-flex align-items-center">
            <div class="row-2">
                <p class="mt-2 kartickaNadpisy">FERRATA MARTINSKÉ HOLE</p>
                <p> Ferrata na Martinských holiach, ktorá bola spustená v roku 2013, je prvou skutočnou alpskou ferratou
                    na Slovensku.
                    Oficiálne nesie názov Ferrata HSZ (Horskej záchrannej služby) a prevedie vás malebnou prírodou z
                    okrajovej časti
                    Martina až do rekreačného strediska Martinské hole. Cesta je jednosmerná a začína pri konečnej
                    zastávke MHD na
                    Stráňach, odkiaľ pokračuje po žltej turistickej značke pozdĺž kaňonu Pivovarský potok (náročnosť
                    A/B). Neskôr sa
                    rozdeľuje a návštevník si môže vybrať medzi jednoduchším (B) a náročnejším (C) variantom trasy. Obe
                    časti sú pomerne
                    strmé a prejsť ich je možné len s pomocou rebríkov, istiacich lán a stúpačiek. Cestu vám spríjemnia
                    viaceré drevené
                    mostíky a oddychové miesta.
                </p>
            </div>
        </div>
    </div>


    <div class="row  align-items-center odstavec">
        <div class="col-md-8 mb-8">
            <div class="row-2">
                <p class="mt-2 kartickaNadpisy">FERRATA DVE VEŽE</p>
                <p>
                    Najmladšia slovenská ferrata Dve veže sa nachádza v Liptovských Revúcach. Jedná sa o ferratový park,
                    v ktorom si môžete vyskúšať 9 rôznych trás náročnosti B až D. Trasy sa nachádzajú v prostredí 3
                    skalných veží – dvoch väčších a jednej malej. Tie sú navzájom prepojené lanovými mostami.
                    K ferratám sa dostanete z parkoviska pri futbalovom ihrisku neďaleko Nižnej Revúcej už za 10 minút.
                    Vstup na ferratu nie je spoplatnený. Ferratový set si môžete zapožičať v ubytovacom komplexe Gothal
                    v Liptovskej osade za 10 € na deň. Trasy sú prístupné od 15. júna do 31. januára.
                </p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <img src="Obrazky/ferrataDveVeze.jpg" class="img-fluid rounded-start obrazokFerrataMartin  mx-auto d-block"
                 alt="...">
        </div>
    </div>


    <div class="row  align-items-center odstavec">
        <div class="col-md-4 mb-4">
            <img src="Obrazky/ferrataSkalka1.jpg" class="img-fluid rounded-start obrazokFerrataMartin  mx-auto d-block"
                 alt="...">
        </div>
        <div class="col-md-4 mb-4">
            <div class="row-2">
                <p class="mt-2 kartickaNadpisy">VIA FERRATA SKALKA</p>
                <p> Ferrata Skalka sa nachádza v Kremnických vrchoch. Je najnáročnejšou a najatraktívnejšou slovenskou
                    ferratou. Pre verejnosť bola otvorená v roku 2017 a v aktuálnej dobe ponúka možnosť výberu z 3 trás.
                    Zatiaľ čo tou najjednoduchšou je Trubačova veža, tak náročnosťou C vás preverí Komín. Navyše, pre
                    skúsených „ferratistov“ je k dispozícii Výzva, ktorá spadá do kategórie E a pýši sa titulom
                    najnáročnejšej ferraty na Slovensku. </p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <img src="Obrazky/ferrataSkalka.jpg" class="img-fluid rounded-start obrazokFerrataMartin  mx-auto d-block"
                 alt="...">
        </div>
    </div>

    <div class="row   align-items-center odstavec">
        <div class="col-md-12 mb-12 full-width-image">
        </div>
    </div>

    <div class="row  align-items-center odstavec">
        <div class="col-md-4 mb-4">
            <img src="Obrazky/ferrataKysel.jpeg" class="img-fluid rounded-start obrazokFerrataMartin  mx-auto d-block"
                 alt="...">
        </div>
        <div class="col-md-8 mb-8">
            <div class="row-2">
                <p class="mt-2 kartickaNadpisy">FERRATA KYSEĽ</p>
                <p>
                    Je súčasťou malebného Slovenského raja, konkrétne tiesňavy Kyseľ, ktorá bola dlhé desiatky rokov
                    turistom neprístupná. Správa Národného Parku však v roku 2016 toto tabu prelomila a tiesňava
                    dokonca dostala novú fazónu v podobe zabezpečených úsekov. Nástup na ferratu začína v obci
                    Čingov (časť Ďurkovec) a pokračuje veľmi príťažlivým skalným prostredím. Treba sa
                    pripraviť na zhruba 4 až 6 hodín v teréne, počas ktorých zdoláte až 5 vodopádov. Ferrata s
                    náročnosťou B-C býva otvorená od 15.6. do 31.10.

                </p>
            </div>
        </div>
    </div>
</div>


@endsection
