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
        'heslo'
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
}

