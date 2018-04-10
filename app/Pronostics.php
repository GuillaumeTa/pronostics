<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pronostics extends Model{
    public $fillable =[
        'score_equipe_1', 'score_equipe_2',
    ];
}
