<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tura extends Model
{
    use HasFactory;
    
    protected $fillable =[


        'tipus',
        'idopont',
        'turavezeto',

        'ar',
        'minLetszam',
        'maxLetszam',

    ];


}
