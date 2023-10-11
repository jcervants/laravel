<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';
    protected $primaryKey = 'id_categoria';

    protected $fillable = ['categoria','descripcion','estado']; //campos a llenar
    protected $guarded = []; //campos que no se llenaran 
}
