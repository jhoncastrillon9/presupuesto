<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['Idcategoria', 'Nombre'];


    /// Relaciones de BD

    public function items()
    {
        return $this->hasMany('app\item');
    }
}
