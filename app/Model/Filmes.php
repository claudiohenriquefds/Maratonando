<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

    protected $table = 'filmes';

}
