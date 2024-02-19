<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turatipus extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected  $primaryKey = 'tipus';
    protected $fillable = [
        //'tipus',
        'turanev',
        'tajegyseg',
        'nehezseg',
        'tavolsag',
        'szintkulonbseg',
        'kerekpar',
        'indulashelye',
        'erkezeshelye',
        'leiras',
    ];
}
