<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'nombre', 'ingredientes', 'preparacion', 'imagen', 'categoria_id'
    ];


    public function categoriaReceta(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    //obtener información del usuario via user_id
    public function autorReceta(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
