<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class match extends Model
{

    public $table = 'match';

    protected $fillable = [
        'equipe_1', 'equipe_2', 'score_1', 'score_2', 'date',
    ];
}
