<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Absolvovane extends Model
{
    use HasFactory;
    protected $table = 'absolvovane';

    protected $fillable = ['user_id', 'vrchol_id'];
}

