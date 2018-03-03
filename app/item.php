<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'items';

    protected $fillable = ['Iditem', 'Nombre', 'Idcategoria'];

    //un item puede tener una sola categoria

    public function categoria()
    {
        return $this->belongsTo('app\item');
    }


    public function detallepresupuestos()
    {
        return $this->hasMany('app\detallepresupuesto');
    }
}
