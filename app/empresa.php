<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    // tabla empresa

    protected $table = 'empresas';
    // campos de la tabla
    protected  $fillable = ['Idempresa', 'Nombre', 'Tipodoc', 'Documento', 'Telefono', 'Direccion', 'Observacion', 'Idusuario'];

    //una empresa puede tener varios usuarios

    public function usuarios()
    {
        return $this->hasMany('app\usuario');
    }

    public function presupuestos()
    {
        return $this->hasMany('app\presupuesto');
    }

}
