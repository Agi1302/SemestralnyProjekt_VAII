<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Otazka extends Model
{
    use HasFactory;

    protected $table = 'table_otazky';

    protected $fillable = [
        'id',
        'idPouzivatela',
        'textOtazky',
        'textOdpovede',
    ];


    //pre ziskanie mena daneho pouzivatela na vypis pri otazkach
    public function user()
    {
        return $this->belongsTo('App\Models\Pouzivatel', 'idPouzivatela');
    }
}
