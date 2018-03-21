<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //define con que tabla va a trabajar
    protected $fillable = ['nombre','descripcion','condicion'];
    
    
}
