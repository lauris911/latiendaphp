<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //relacion M - 1 con categoria
    public function categortia(){
        return $this->belongsTo(Categoria::class , 'categoria_id');
    }

    public function marca(){
        return $this->belongsTo(marca::class , 'marca_id');
    }
}
