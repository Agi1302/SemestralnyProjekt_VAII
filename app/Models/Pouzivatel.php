<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pouzivatel extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'meno',
        'priezvisko',
        'email',
        'heslo',
        'id_role'
    ];

    protected $hidden = [
        'heslo',
        'remember_token'
    ];

    protected $guarded = ['id'];

    protected $casts = [
        'email-verified_at' => 'datetime'
    ];

    protected $table = 'pouzivatelia';

    public function getAuthPassword()
    {
        return $this->heslo;
    }


    // many to many, 1.nazov modelu, 2.nazov prepajajucej tabulky, 3. nazov stlpca z prepajajucej- odkazuje na pouzivatela
    public function favourites()
    {
        return $this->belongsToMany(Vrchol::class, 'favourites', 'user_id', 'vrchol_id');
    }

    public function absolvovane()
    {
        return $this->belongsToMany(Vrchol::class, 'absolvovane', 'user_id', 'vrchol_id');
    }

    public function is_admin():bool {
        return $this->id_role == 1;
    }

}

