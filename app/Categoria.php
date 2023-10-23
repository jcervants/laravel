<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HasFactory;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id_categoria';

    protected $fillable = ['categoria','descripcion','estado']; //campos a llenar
    protected $guarded = []; //campos que no se llenaran 
}
