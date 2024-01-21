<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Favourite extends Model
{
    use HasFactory;

    protected $table = 'table_favourites';
    protected $fillable = ['user_id', 'vrchol_id'];


}

