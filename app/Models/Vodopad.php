<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Vodopad extends Model
{
    use HasFactory;

    protected $table = 'vodopady';

    protected $fillable = [
        'id',
        'nazov',
        'text',
        'obrazok',
    ];
}
