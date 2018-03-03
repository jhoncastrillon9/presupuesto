<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presupuesto extends Model
{
    //
    protected $table = 'presupuestos';

    protected $fillable = ['Idpresupuesto', 'Idempresa', 'Nombre', 'Valor'];



    public function empresas()
    {
        return $this->belongsTo('App\empresa');
    }


    public function detallepresupuestos()
    {
        return $this->hasMany('app\detallepresupuesto');
    }



}
