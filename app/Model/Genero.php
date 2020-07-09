<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $fillable = [
        'fk_idmovie',
        'gender',
    ];

    protected $table = 'generos';
}
