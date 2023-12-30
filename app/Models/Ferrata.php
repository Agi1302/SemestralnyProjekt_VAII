<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Ferrata extends Model
{
    use HasFactory;

    protected $table = 'ferraty';

    protected $fillable = [
        'id',
        'nazov',
        'text',
        'obrazok',
    ];
}
