<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallepresupuesto extends Model

{
    protected $table = 'detallepresupuestos';

    protected $fillable = ['Iddetalle', 'Idpresupuesto', 'Fecha', 'Iditem', 'Idmedida', 'Cantidad', 'Valoru', 'Valort', 'Idusuario', 'Observacion'];


    public function presupuestos()
    {
        return $this->belongsTo('App\presupuesto');
    }

    public function items()
    {
        return $this->belongsTo('App\item');
    }

    public function medidas()
    {
        return $this->belongsTo('App\medida');
    }



    public function usuarios()
    {
        return $this->belongsTo('App\usuario');
    }



}


