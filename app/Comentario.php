<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $guarded = ['id'];
    
    public function ticket(){
        $this->belongsTo('App\Comentario');
    }
}
