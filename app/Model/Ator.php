<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    protected $fillable = [
        'fk_idmovie',
        'actor',
    ];

    protected $table = 'ators';

}
