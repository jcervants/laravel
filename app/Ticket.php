<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title', 'content','solucion','precio', 'slug', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Comentario', 'post_id');
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
}
