<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vrchol extends Model
{
    use HasFactory;

    protected $table = 'vrcholy';

    protected $fillable = [
        'nazov_vrcholu',
        'stat',
        'okres',
        'nadmorska_vyska',
        'pohorie',
        'typ_tury',
        'narocnost',
        'dostupne_v_zime',
        'dlzka_trasy',
        'dostupnost'
    ];
}
//
//namespace App\Models;
//
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
//
//class Vrchol extends Model
//{
//    use HasFactory;
//
//    protected $table = 'vrcholy';
//
//    protected $fillable = [
//        'nazov_vrcholu',
//        'stat',
//        'okres',
//        'nadmorska_vyska_vrcholu',
//        'pohorie',
//        'najlahsi_vystup_z',
////        'typ_tury',
////        'narocnost',
////        'dostupne_v_zime',
////        'dlzka_trasy',
////        'dostupnost'
//    ];
//
//}
