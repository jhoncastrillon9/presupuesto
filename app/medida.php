<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medida extends Model
{
    protected $table = 'medidas';

    protected  $fillable = ['Idmedida', 'Nombre', 'Simbolo'];



    public function detallepresupuestos()
    {
        return $this->hasMany('app\detallepresupuesto');
    }
}
