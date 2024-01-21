<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('absolvovane')->delete();
        DB::table('table_otazky')->delete();
        DB::table('vodopady')->delete();
        DB::table('ferraty')->delete();
        DB::table('chaty')->delete();
        DB::table('table_favourites')->delete();
        DB::table('vrcholy')->delete();
        DB::table('pouzivatelia')->delete();



        DB::table('pouzivatelia')->insert([
            ['id' => 1, 'meno' => 'Admin', 'priezvisko' => 'admin', 'email' => 'adminadmin@gmail.com', 'heslo' => '$2y$12$lus3gSnWE2BQju04KC4tEuF18Ze77ENwEQosu3Z2ODCBcNM2342VO', 'remember_token' => NULL, 'created_at' => '2023-12-27 20:15:16', 'updated_at' => '2024-01-20 17:44:43', 'id_role' => 1],
            ['id' => 2, 'meno' => 'Jozef', 'priezvisko' => 'Steinhubl', 'email' => 'steinhubl536@gmail.com', 'heslo' => '$2y$12$QmfCu26YG.1Rs/sv2Uiyeu1DVQBzYWi6vQwS8aCQG0l9I6S5EzjJ6', 'remember_token' => NULL, 'created_at' => '2023-12-27 23:21:52', 'updated_at' => '2024-01-20 16:37:55', 'id_role' => 2],
            ['id' => 3, 'meno' => 'Ingrid', 'priezvisko' => 'Malá', 'email' => 'ingridmala@gmail.com', 'heslo' => '$2y$12$MWp5oQJOLZUx4Ye1scO0yeMROOejni14Hnk6GdyjxjCaMiOKmt/Se', 'remember_token' => NULL, 'created_at' => '2024-01-02 19:03:10', 'updated_at' => '2024-01-02 19:03:10', 'id_role' => 2],
            ['id' => 4, 'meno' => 'Aurel', 'priezvisko' => 'Ružbanský', 'email' => 'aurelruzbansky@gmail.com', 'heslo' => '$2y$12$Mcuj1Bz69kica8rumB3dmectWc1tIbQEMVXcUrWql4WzXaWDxLroG', 'remember_token' => NULL, 'created_at' => '2024-01-02 19:12:36', 'updated_at' => '2024-01-02 19:12:36', 'id_role' => 2],
            ['id' => 5, 'meno' => 'Aurora', 'priezvisko' => 'Kráľová', 'email' => 'aurelakralova@gmail.com', 'heslo' => '$2y$12$IBpHiqBmmbOG3tV29OcEIexJXy4zTQ5taFH0r5EQGW9MOuhWUpnfi', 'remember_token' => NULL, 'created_at' => '2024-01-02 19:18:22', 'updated_at' => '2024-01-02 19:18:22', 'id_role' => 2]
        ]);

        DB::table('vrcholy')->insert([
            ['id' => 1, 'nazov_vrcholu' => 'Ďumbier', 'stat' => 'Slovensko', 'okres' => 'Liptovský Mikuláš', 'nadmorska_vyska' => 2043, 'pohorie' => 'Nízke Tatry', 'typ_tury' => 'horska', 'narocnost' => 'stredna', 'dostupne_v_zime' => 'ANO', 'dlzka_trasy' => '10+', 'dostupnost' => 'bez_vodcu', 'obrazok' => 'Dumbier.jpg', 'created_at' => '2023-12-30 23:58:00', 'updated_at' => '2023-12-30 23:58:00'],
            ['id' => 2, 'nazov_vrcholu' => 'Lomnický štít', 'stat' => 'Slovensko', 'okres' => 'Poprad', 'nadmorska_vyska' => 2635, 'pohorie' => 'Vysoké Tatry', 'typ_tury' => 'horska', 'narocnost' => 'lahka', 'dostupne_v_zime' => 'ANO', 'dlzka_trasy' => '1-5', 'dostupnost' => 'bez_vodcu', 'obrazok' => 'LomnickyStit.jpg', 'created_at' => '2023-12-28 18:36:35', 'updated_at' => '2024-01-17 18:19:38'],
            ['id' => 3, 'nazov_vrcholu' => 'Chopok', 'stat' => 'Slovensko', 'okres' => 'Brezno', 'nadmorska_vyska' => 2023, 'pohorie' => 'Nízke Tatry', 'typ_tury' => 'horska', 'narocnost' => 'lahka', 'dostupne_v_zime' => 'ANO', 'dlzka_trasy' => '1-5', 'dostupnost' => 'bez_vodcu', 'obrazok' => 'Chopok.jpg', 'created_at' => '2023-12-31 00:10:39', 'updated_at' => '2024-01-01 20:45:09'],
            ['id' => 9, 'nazov_vrcholu' => 'Kriváň', 'stat' => 'Slovensko', 'okres' => 'Liptovský Mikuláš', 'nadmorska_vyska' => 2494, 'pohorie' => 'Vysoké Tatry', 'typ_tury' => 'horska', 'narocnost' => 'tazka', 'dostupne_v_zime' => 'ANO', 'dlzka_trasy' => '10+', 'dostupnost' => 'bez_vodcu', 'obrazok' => 'Krivan.jpg', 'created_at' => '2023-12-28 18:35:44', 'updated_at' => '2023-12-28 18:35:44'],
            ['id' => 11, 'nazov_vrcholu' => 'Popradské pleso', 'stat' => 'Slovensko', 'okres' => 'Poprad', 'nadmorska_vyska' => 1494, 'pohorie' => 'Vysoké Tatry', 'typ_tury' => 'oddychova', 'narocnost' => 'lahka', 'dostupne_v_zime' => 'ANO', 'dlzka_trasy' => '5-10', 'dostupnost' => 'bez_vodcu', 'obrazok' => 'PopradskePleso.jpg', 'created_at' => '2023-12-28 18:37:34', 'updated_at' => '2023-12-28 18:37:34'],
            ['id' => 13, 'nazov_vrcholu' => 'Veľké Hincovo Pleso', 'stat' => 'Slovensko', 'okres' => 'Poprad', 'nadmorska_vyska' => 1946, 'pohorie' => 'Vysoké Tatry', 'typ_tury' => 'horska', 'narocnost' => 'stredna', 'dostupne_v_zime' => 'ANO', 'dlzka_trasy' => '10+', 'dostupnost' => 'bez_vodcu', 'obrazok' => 'VelkeHincovoPleso.jpg', 'created_at' => '2023-12-28 18:39:12', 'updated_at' => '2023-12-28 18:39:12'],
            ['id' => 18, 'nazov_vrcholu' => 'Frčkov', 'stat' => 'Slovensko', 'okres' => 'Ružomberok', 'nadmorska_vyska' => 1586, 'pohorie' => 'Veľká Fatra', 'typ_tury' => 'horska', 'narocnost' => 'lahka', 'dostupne_v_zime' => 'ANO', 'dlzka_trasy' => '5-10', 'dostupnost' => 'bez_vodcu', 'obrazok' => 'Frckov.jpg', 'created_at' => '2023-12-31 00:16:49', 'updated_at' => '2023-12-31 00:16:49'],
            ['id' => 19, 'nazov_vrcholu' => 'Veľký Kriváň', 'stat' => 'Slovensko', 'okres' => 'Žilina', 'nadmorska_vyska' => 1708, 'pohorie' => 'Malá Fatra', 'typ_tury' => 'horska', 'narocnost' => 'stredna', 'dostupne_v_zime' => 'ANO', 'dlzka_trasy' => '10+', 'dostupnost' => 'bez_vodcu', 'obrazok' => 'VelkyKrivan.jpg', 'created_at' => '2023-12-31 00:18:37', 'updated_at' => '2023-12-31 00:18:37'],
            ['id' => 23, 'nazov_vrcholu' => 'Vysoká', 'stat' => 'Slovensko', 'okres' => 'Poprad', 'nadmorska_vyska' => 2547, 'pohorie' => 'Vysoké Tatry', 'typ_tury' => 'horska', 'narocnost' => 'tazka', 'dostupne_v_zime' => 'ANO', 'dlzka_trasy' => '10+', 'dostupnost' => 'bez_vodcu', 'obrazok' => 'Vysoka.jpg', 'created_at' => '2024-01-20 17:15:27', 'updated_at' => '2024-01-20 17:15:27']
        ]);

        DB::table('table_favourites')->insert([
            [ 'user_id' => 1, 'vrchol_id' => 9, 'created_at' => '2024-01-17 20:33:42', 'updated_at' => '2024-01-17 20:33:42'],
            [ 'user_id' => 2, 'vrchol_id' => 3, 'created_at' => '2024-01-19 01:26:21', 'updated_at' => '2024-01-19 01:26:21'],
            [ 'user_id' => 2, 'vrchol_id' => 1, 'created_at' => '2024-01-19 01:38:49', 'updated_at' => '2024-01-19 01:38:49'],
            [ 'user_id' => 2, 'vrchol_id' => 19, 'created_at' => '2024-01-19 01:49:04', 'updated_at' => '2024-01-19 01:49:04'],
            [ 'user_id' => 2, 'vrchol_id' => 13, 'created_at' => '2024-01-19 01:51:22', 'updated_at' => '2024-01-19 01:51:22'],
            [ 'user_id' => 1, 'vrchol_id' => 1, 'created_at' => '2024-01-20 16:00:16', 'updated_at' => '2024-01-20 16:00:16'],
            [ 'user_id' => 1, 'vrchol_id' => 18, 'created_at' => '2024-01-20 18:09:36', 'updated_at' => '2024-01-20 18:09:36']
        ]);

        DB::table('chaty')->insert([
            [
                'id' => 1,
                'nazov' => 'Bilíková chata',
                'text' => 'Horská chata v prekrásnom vysokotatranskom prostredí v 1255 m.n.m., umožňuje skorý nástup do horolezeckých terénov. Nachádza sa tesne pod Hrebienkom na juhovýchodnom svahu Slavkovského štítu. Stanica lanovky je od nej vzdialená 300 metrov. Je otvorená celoročne a ponúka dvojlôžkové izby alebo malý a veľký apartmán v podkroví. Na chate sa nachádza reštaurácia, vonkajšia terasa a taktiež aj sauna. Je prístupná cca 5 minút od Hrebienka. K chate vedie i menej frekventovaný chodník z Tatranskej Lesnej cca 1,5 hod.',
                'obrazok' => 'BilikovaChata.jpeg',
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10436.540672607945!2d20.21406238059519!3d49.16004254199201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e23dc705d2c59%3A0xb167a28abe53aead!2sBil%C3%ADkova%20chata!5e0!3m2!1ssk!2ssk!4v1703884939799!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
                'created_at' => '2023-12-29 20:22:36',
                'updated_at' => '2024-01-01 18:06:58',
            ],
            [
                'id' => 3,
                'nazov' => 'Zámkovského chata',
                'text' => 'Zamkovského chata sa nachádza vo Vysokých Tatrách v Malej Studenej doline v nadmorskej výške 1475 m.n.m. Je vzdialená asi hodinu pešej túry z Hrebienka po červenej značke smer Skalnaté Pleso. Chodník na chatu je nenáročný, celoročne otvorený, preto je táto túra vyhľadávaná najmä rodinami s deťmi. Po ceste Vás očarí Obrovský vodopád a krásne výhľady do tatranskej kotliny, a ani nezbadáte a ste na chate. Zamkovského chata je otvorená celoročne, pre okoloidúcich turistov poskytuje nielen občerstvenie, ale aj nocľah. V každej minúte v roku a v každej situácii je na chate prítomný personál, ktorý je pripravený Vám poskytnúť potrebné útočisko aj pomoc. Zamkovského chata disponuje 23 lôžkami a 2 prístelkami. Usporiadanie izieb je nasledovné: 3 x 4-posteľová izba, 1x 5-posteľová izba a 3 x 2-posteľová izba. V izbách sa nachádzajú poschodové postele, WC a sprchy s teplou vodou sú na chodbe. V prípade zlého počasia je možné prespať aj núdzovo na povale vo vlastnom spacáku.',
                'obrazok' => 'ZamkovskehoChata.jpeg',
                'url' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1550.9639456674645!2d20.219024044889544!3d49.17399507177076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1703884258270!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
                'created_at' => '2023-12-29 20:08:31',
                'updated_at' => '2023-12-29 20:08:31',
            ],
            [
                'id' => 4,
                'nazov' => 'Chata pod Soliskom',
                'text' => 'Chata pod Soliskom je najmladšou vysokohorskou chatou vo Vysokých Tatrách a nachádza sa na južnom svahu Predného Soliska. Je otvorená celoročne, 24 hodín denne. Zásobovanie chaty uľahčuje sedačková lanovka. Musia dovážať aj vodu, ktorá sa na hrebeni Predného Soliska nemôže udržať. Počas turistickej sezóny to býva aj 2000 litrov denne. V lete roku 2004 bola rozšírená terasa chaty. Chata poskytuje ubytovanie v jedálni (9 lôžok), avšak až po 21 hodine a budíček je už o 6 hodine. Okrem toho ponúka chata jednu samostatnú dvojlôžkovú izbu. Chatárom je v súčasnosti Milan Štefánik.',
                'obrazok' => 'ChataPodSoliskom.jpeg',
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.960389903431!2d20.037953112596036!3d49.14437647125307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471589bfaea39cb3%3A0x30c43f0c1df5f25c!2sChata%20pod%20Soliskom!5e0!3m2!1ssk!2ssk!4v1703884551560!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
                'created_at' => '2023-12-29 20:16:35',
                'updated_at' => '2023-12-29 20:16:35',
            ],
            [
                'id' => 5,
                'nazov' => 'Chata Plesnivec',
                'text' => 'Chata Plesnivec je jediná vysokohorská chata na území Belianskych Tatier. Prístupná je celoročne. Nachádza sa na južnom úbočí ich hlavného hrebeňa, pod bralami Skalných vrát. Na chatu sa možno dostať z obce Tatranská Kotlina z autobusovej zastávky Čarda za cca 1,50 hod., z Kežmarských Žľabov cca 1,55 hod. alebo z chaty pri Zelenom plese cca 1,40 hod. Ubytovacia kapacita chaty Plesnivec je 20 lôžok rozmiestnených v šiestich izbách. Nechýbajú ani toalety a sprchovacie kúty. Na prízemí je kuchyňa a jedáleň s ponukou teplých a studených jedál, nápojov a suvenírov. Na poschodí je okrem izieb spoločenská miestnosť.',
                'obrazok' => 'ChataPlesnivec.webp',
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.7316028615655!2d20.2762021!3d49.224616999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e19469a7ec1e3%3A0x34bb7af9f44be339!2sChata%20Plesnivec!5e0!3m2!1ssk!2ssk!4v1703884671508!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
                'created_at' => '2023-12-29 20:18:14',
                'updated_at' => '2023-12-29 20:18:14',
            ],
            [
                'id' => 6,
                'nazov' => 'Chata pod Rysmi',
                'text' => 'Chata pod Rysmi je najvyššie položenou (2250 m) a najmladšou tatranskou chatou. Chata v súčasnosti poskytuje nielen stravovanie, ale aj ubytovanie v nocľahárni v strešnej nadstavbe, v prípade potreby i v jedálni na dlážke. Je výborným východiskom k horolezeckému podnikaniu v Bielovodskej doline (Ťažká dolina, Galéria Ganku, Rysy…), ale aj v horných partiách Mengusovskej doliny a Zlomísk. Okolo chaty vedie turistický chodník na Rysy, ďalej s prechodom na Morskie oko. Je otvorená len v letnej sezóne (od 15.6. do 31.10.).',
                'obrazok' => 'ChataPodRysmi.jpg',
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10433.486997943532!2d20.07678668060599!3d49.17453204202596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47158a0e9b514e69%3A0x2fbfb2d82fdddd9e!2sChata%20pod%20Rysmi!5e0!3m2!1ssk!2ssk!4v1703884735895!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
                'created_at' => '2023-12-29 20:19:16',
                'updated_at' => '2023-12-29 20:19:16',
            ],
            [
                'id' => 8,
                'nazov' => 'Skalnatá chata',
                'text' => 'Skalnatá chata (1 725 m n. m.) je situovaná v centre Skalnatej doliny na Tatranskej magistrále. V jej tesnej blízkosti vedie najdlhšia a najvyššie postavená tatranská zjazdovka z Lomnického sedla (2 190 m n. m.) do Tatranskej Lomnice (888 m n. m.). Chata je dostupná viacerými spôsobmi, po červenej značke ( ) z Hrebienka a Zeleného plesa, po zelenej ( ) z Tatranskej Lomnice a po modrej ( ) z Kovalčíkovej poľany. Pre pohodlnejších turistov je celoročne k dispozícii kabínková lanovka z Tatranskej Lomnice na Skalnaté pleso, odkiaľ je to na chatu už len pár krokov. Chata ponúka okrem občerstvenia už aj ubytovanie v dvoch izbách.',
                'obrazok' => 'SkalnataChata.jpg',
                'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2607.75450909038!2d20.233584300000008!3d49.18624479999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e22278992da59%3A0xfa6dd228e6e11cf5!2sSkalnat%C3%A1%20chata!5e0!3m2!1ssk!2ssk!4v1703884878411!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
                'created_at' => '2023-12-29 20:21:40',
                'updated_at' => '2023-12-29 20:21:40',
            ],
        ]);

        DB::table('ferraty')->insert([
            [
                'id' => 1,
                'nazov' => 'FERRATA KYSEĽ',
                'text' => 'Je súčasťou malebného Slovenského raja, konkrétne tiesňavy Kyseľ, ktorá bola dlhé desiatky rokov turistom neprístupná. Správa Národného Parku však v roku 2016 toto tabu prelomila a tiesňava dokonca dostala novú fazónu v podobe zabezpečených úsekov. Nástup na ferratu začína v obci Čingov (časť Ďurkovec) a pokračuje veľmi príťažlivým skalným prostredím. Treba sa pripraviť na zhruba 4 až 6 hodín v teréne, počas ktorých zdoláte až 5 vodopádov. Ferrata s náročnosťou B-C býva otvorená od 15.6. do 31.10.',
                'obrazok' => 'ferrataKysel.jpeg',
                'created_at' => '2023-12-29 23:12:00',
                'updated_at' => '2024-01-01 18:18:56',
            ],
            [
                'id' => 2,
                'nazov' => 'FERRATA MARTINSKÉ HOLE',
                'text' => 'Ferrata na Martinských holiach, ktorá bola spustená v roku 2013, je prvou skutočnou alpskou ferratou na Slovensku. Oficiálne nesie názov Ferrata HSZ (Horskej záchrannej služby) a prevedie vás malebnou prírodou z okrajovej časti Martina až do rekreačného strediska Martinské hole. Cesta je jednosmerná a začína pri konečnej zastávke MHD na Stráňach, odkiaľ pokračuje po žltej turistickej značke pozdĺž kaňonu Pivovarský potok (náročnosť A/B). Neskôr sa rozdeľuje a návštevník si môže vybrať medzi jednoduchším (B) a náročnejším (C) variantom trasy. Obe časti sú pomerne strmé a prejsť ich je možné len s pomocou rebríkov, istiacich lán a stúpačiek. Cestu vám spríjemnia viaceré drevené mostíky a oddychové miesta.',
                'obrazok' => 'ferrataMartin.jpg',
                'created_at' => '2023-12-29 23:10:17',
                'updated_at' => '2023-12-29 23:10:17',
            ],
            [
                'id' => 9,
                'nazov' => 'VIA FERRATA SKALKA',
                'text' => 'Ferrata Skalka sa nachádza v Kremnických vrchoch. Je najnáročnejšou a najatraktívnejšou slovenskou ferratou. Pre verejnosť bola otvorená v roku 2017 a v aktuálnej dobe ponúka možnosť výberu z 3 trás. Zatiaľ čo tou najjednoduchšou je Trubačova veža, tak náročnosťou C vás preverí Komín. Navyše, pre skúsených „ferratistov“ je k dispozícii Výzva, ktorá spadá do kategórie E a pýši sa titulom najnáročnejšej ferraty na Slovensku',
                'obrazok' => 'FerrataSkalka.jpg',
                'created_at' => '2023-12-31 18:45:25',
                'updated_at' => '2023-12-31 18:45:25',
            ],
        ]);

        DB::table('vodopady')->insert([
            [
                'id' => 1,
                'nazov' => 'VODOPÁDY STUDENÉHO POTOKA',
                'text' => 'Vodopády Studeného potoka (nesprávne Studenovodské vodopády), úsek Studeného potoka od sútoku Veľkého Studeného potoka z Veľkej Studenej doliny a Malého Studeného potoka z Malej Studenej doliny v tesnej blízkosti Rainerovej chaty, až po Bilíkovu chatu, kde sa vodopády končia. Studený potok preteká obrovským terénnym zlomom a vytvára prekrásne kaskády a katarakty, ktoré sú obzvlášť pekné pri jarnom roztápaní snehu alebo po výdatných dažďoch, keď je hladina vody vysoká. Pod Bilíkovou chatou Studený potok už preteká miernejším korytom. Pozdĺž vodopádov vedie niekoľko značkovaných turistických chodníkov, vodopády sú vyhľadávaným turistickým miestom. Najznámejšie vodopády zhora nadol: Obrovský vodopád, Malý a Veľký vodopád a Dlhý vodopád.',
                'obrazok' => 'Obrazky/Vodopady/vodopadStudenehoPotoka.jpeg',
                'created_at' => '2023-12-30 21:10:24',
                'updated_at' => '2024-01-01 18:35:06',
            ],
            [
                'id' => 2,
                'nazov' => 'LUČANSKÝ VODOPÁD',
                'text' => 'Lúčanský vodopád patrí k piatim najvýznamnejším vodopádov na Slovensku a vyslúžil si aj titul národná prírodná pamiatka. Čím je tak výnimočný? Skutočnú raritu z neho robí hlavne jeho poloha - nájdete ho totiž priamo uprostred kúpeľnej obce Lúčky na Liptove. Voda v kaskádovitom vodopáde vysokom 12 m padá z okraja travertínovej terasy do malého jazierka, rovnaké travertínové podložie ju následne sfarbuje do bledomodrých odtieňov. V teplých mesiacoch si tu môžete vychutnať nielen príjemnú atmosféru prostredia, ale aj kúpeľ v sviežej vode.',
                'obrazok' => 'Obrazky/Vodopady/vodopadLucansky.jpg',
                'created_at' => '2023-12-30 21:09:33',
                'updated_at' => '2023-12-30 21:09:33',
            ],
            [
                'id' => 3,
                'nazov' => 'ŠUTOVSKÝ VODOPÁD',
                'text' => 'Šútovský vodopád je štvrtý najvyšší vodopád na Slovensku a najvyšší v Malej Fatre. Nachádza sa v Malej Fatre vo výške 830 m n. m. približne 4 km od obce Šútovo. S výškou 38 m je najvyšším vodopádom v Malej Fatre. Je napájaný vodou zo Šútovského potoka, ktorý má svoj prameň v neobyčajnom skalnom útvare Mojžišove pramene. Tie sú od vodopádu vzdialene asi 1 km. Potok priamo nad vodopádom má šírku 2,5 metra. Východzím miestom je osada Rieka patriaca ku Kráľovanom. K vodopádu sa ide náučnou trasou, a to Šútovskou dolinou. Trasa k vodopádu má dĺžku približne 3,7 km, je nenáročná a vhodná aj pre deti.',
                'obrazok' => 'Obrazky/Vodopady/vodopadSutovsky.jpg',
                'created_at' => '2023-12-30 21:08:31',
                'updated_at' => '2023-12-30 21:08:31',
            ],
            [
                'id' => 4,
                'nazov' => 'VODOPÁD SKOK',
                'text' => 'Tatrách túra k vodopádu Skok. Aj keď sa tento štvrtý najväčší vodopád v Tatrách nachádza v nadmorskej výške 1 789 m, dostanete sa k nemu po nenáročných chodníkoch s miernym stúpaním. Trasa začína v Štrbskom Plese, odkiaľ pokračujte po žlto vyznačenom chodníku. Spočiatku kamenistá cesta sa časom zužuje na chodník, ktorý vás dovedie do tichej Mlynickej doliny. Mierne stúpanie a následný pás kosodreviny vám prezradia, že sa blížite k cieľu - o chvíľu sa vám priamo pred očami objaví kamenný prah, z ktorého okraja s hukotom prepadáva voda po menších kaskádach a rozstrekuje sa na okolité skaly. Pohľad na 30 m vysoký vodopád Skok si priam žiada fotku, vo výhľade naň nebráni žiaden iný objekt, vďaka čomu sa i skvele fotí. Pár záberov urobte aj pri krásnych plesách, ktorých je v okolí vodopádu neúrekom',
                'obrazok' => 'Obrazky/Vodopady/vodopadSkok.jpg',
                'created_at' => '2023-12-30 21:10:58',
                'updated_at' => '2023-12-30 21:10:58',
            ],
            [
                'id' => 5,
                'nazov' => 'VODOPÁDY BYSTRÉHO POTOKA',
                'text' => 'Národná prírodná pamiatka Vodopád Bystré sa nachádza na južných svahoch Poľany, asi 8 km severne od Hriňovej. Popýšiť sa môže svojou 23 metrovou výškou, vďaka čomu patrí nielen medzi najvyššie, ale i najmohutnejšie slovenské vodopády. Vodopád vznikol približne pred 13,5 miliónmi rokov, stuhnutím lávy. Z tej sa vytvorili čierny andezitové bloky, ktoré dnes pripomínajú veľké kvádre, po ktorých steká burácajúci prameň vodpádu. Prechod okolo vodopádu umožňujú rebríky a lano, a preto je potrebné zachovať opatrnosť. Dostač sa k nemu dá viacerými chodníčkami. Krásna, ale poučná je trasa, ktorá vedie z Hriňovej, pretože jej súčasťou je aj nový náučný chodník dlhý 3 kilometre.',
                'obrazok' => 'Obrazky/Vodopady/vodopadBystrehoPotoka.jpg',
                'created_at' => '2023-12-30 21:11:22',
                'updated_at' => '2023-12-30 21:11:22',
            ],
        ]);

        DB::table('table_otazky')->insert([
            ['id' => 4, 'idPouzivatela' => '2', 'textOtazky' => 'Dobrý deň. Chcem sa spýtať, či je výstup na Vysokú možný iba v sprievode horského vodcu?', 'textOdpovede' => 'Dobrý deň. Výstup na Vysokú je technicky menej náročný, ale kondične náročný výstup. Je potrebné mať skúsenosti s vysokohorskou turistikou. Preto sa odporúča výstup s horským vodcom, najmä ak nemáte skúsenosti s podobnými výstupmi. V zime je potrebné mať zimné lezecké vybavenie a skúsenosti s lezením v ľade. Ak nemáte takéto vybavenie alebo skúsenosti, je veľmi dôležité mať s vami horského vodcu.', 'created_at' => '2024-01-02 18:31:34', 'updated_at' => '2024-01-02 20:46:11'],
            ['id' => 6, 'idPouzivatela' => '3', 'textOtazky' => 'Ahojte, chcem sa spýtať, či je na  Martinských holiach povinný ferratový set. Ak áno, je ho tam niekde možné zapožičať?', 'textOdpovede' => 'Áno, na Martinských holiach je povinný ferratový set, ktorý obsahuje prilbu, sedák a tlmič pádov. Ferratový set si môžete zapožičať v Penzióne pod Ferratou, ktorý sa nachádza na začiatku celej trasy, alebo v Skialp shope Vrútky. Pred vstupom na ferratu je tiež dôležité sa poistiť', 'created_at' => '2024-01-02 19:04:27', 'updated_at' => '2024-01-02 20:47:06'],
            ['id' => 8, 'idPouzivatela' => '4', 'textOtazky' => 'Dobrý deň, môžete mi odporučiť nejaké turistické trasy pre začiatočníkov v oblasti Malých Karpát?', 'textOdpovede' => 'Malé Karpaty sú krásnym a rozmanitým pohorím, ktoré ponúka množstvo možností pre turistiku pre začiatočníkov. Tu je niekoľko tipov na trasy, ktoré by sa vám mohli páčiť:\r\n\r\nOkruh z Devína na Sandberg - Táto trasa je dlhá asi 10 km a vedie po červenej a žltej turistickej značke. Začína sa na Devíne, kde si môžete pozrieť historickú pevnosť a pokračuje popri Dunaji až k Sandbergu, ktorý je známy svojimi fosíliami a výhľadom na Záhorie. Cestou sa môžete zastaviť aj pri Hlboči, kde je náučný chodník Molpír s informáciami o prírode a histórii oblasti1.\r\nZáruby, Ostrý kameň a Čertov žľab - Táto trasa je dlhá asi 15 km a vedie po modrej a zelenej turistickej značke. Začína sa v Smoleniciach, kde si môžete pozrieť zámok a botanickú záhradu a pokračuje k Zárubám, ktoré sú najvyšším vrcholom Malých Karpát. Odtiaľ sa môžete vybrať k zrúcanine hradu Ostrý kameň, ktorý bol postavený v 13. storočí a ponúka pekný výhľad na okolie.', 'created_at' => '2024-01-02 19:16:11', 'updated_at' => '2024-01-02 20:49:32'],
            ['id' => 9, 'idPouzivatela' => '4', 'textOtazky' => 'Dobrý deň, chcel by som sa informovať, či sú v oblasti Vysokých Tatier k dispozícii horské chaty a ako je to s rezerváciami?', 'textOdpovede' => 'Dobrý deň, vo Vysokých Tatrách sa nachádza 13 vysokohorských chát1, ktoré ponúkajú ubytovanie a stravovanie pre turistov a horolezcov. Niektoré z nich sú otvorené celoročne, iné len v letnej alebo zimnej sezóne. Pre rezerváciu ubytovania je potrebné kontaktovať priamo chatárov, ktorí vám poskytnú informácie o dostupnosti, cenách a podmienkach. Na internete si môžete pozrieť aj ponuky a hodnotenia rôznych horských chát', 'created_at' => '2024-01-02 19:16:39', 'updated_at' => '2024-01-02 20:54:30'],
            ['id' => 10, 'idPouzivatela' => '5', 'textOtazky' => 'Ahojte, chcel by som vedieť, aké sú aktuálne podmienky na turistických chodníkoch v Nízkych Tatrách?', 'textOdpovede' => NULL, 'created_at' => '2024-01-02 19:19:34', 'updated_at' => '2024-01-02 19:19:34']
        ]);

        DB::table('absolvovane')->insert([
            [ 'user_id' => 2, 'vrchol_id' => 11, 'created_at' => '2024-01-19 01:04:04', 'updated_at' => '2024-01-19 01:04:04'],
            [ 'user_id' => 2, 'vrchol_id' => 2, 'created_at' => '2024-01-19 01:42:52', 'updated_at' => '2024-01-19 01:42:52'],
            [ 'user_id' => 1, 'vrchol_id' => 23, 'created_at' => '2024-01-20 17:15:34', 'updated_at' => '2024-01-20 17:15:34'],
            [ 'user_id' => 1, 'vrchol_id' => 3, 'created_at' => '2024-01-20 18:06:52', 'updated_at' => '2024-01-20 18:06:52'],
            [ 'user_id' => 1, 'vrchol_id' => 9, 'created_at' => '2024-01-20 18:07:24', 'updated_at' => '2024-01-20 18:07:24'],
            [ 'user_id' => 1, 'vrchol_id' => 11, 'created_at' => '2024-01-20 18:07:59', 'updated_at' => '2024-01-20 18:07:59'],
            [ 'user_id' => 1, 'vrchol_id' => 13, 'created_at' => '2024-01-20 18:08:01', 'updated_at' => '2024-01-20 18:08:01'],
            [ 'user_id' => 1, 'vrchol_id' => 1, 'created_at' => '2024-01-20 18:08:44', 'updated_at' => '2024-01-20 18:08:44'],
            [ 'user_id' => 1, 'vrchol_id' => 2, 'created_at' => '2024-01-20 18:08:47', 'updated_at' => '2024-01-20 18:08:47']
        ]);

    }
}
