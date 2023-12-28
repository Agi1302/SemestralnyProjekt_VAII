<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Chata extends Model
{
    use HasFactory;

    protected $table = 'chaty';

    protected $fillable = [
        'id',
        'nazov',
        'text',
        'obrazok',
    ];
}
