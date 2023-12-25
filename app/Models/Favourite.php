<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Favourite extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'vrchol_id'];

    public function user()
    {
        return $this->belongsTo(Pouzivatel::class);
    }

    public function vrchol()
    {
        return $this->belongsTo(Vrchol::class);
    }
}

