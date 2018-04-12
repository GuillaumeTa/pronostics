<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Pronostics extends Model{
    
    public $table = 'pronostic';
    
    protected $fillable =[
        'score_equipe_1', 'score_equipe_2', 'id_match', 'id_user'
    ];
}
