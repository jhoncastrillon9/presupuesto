<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //esto lo que hace es que no guarde la hora de actualizar y crear que por defecto quiere guardar en la tabla
    public $timestamps = false;
    
    //CUIDADO SE DEBE REALIZAR ESTO INDICANDO QUE LA LLAVEPRIMARIA ESTA CON EL NOMBRE IDUSUARIO PORQUE SINO POR EFECTO CON FIND VA A BUSCAR ID
    protected $primaryKey = 'Idusuario';
    


    protected $table = 'usuarios';

    protected  $fillable = ['Idusuario', 'Email', 'Password'];




    public function empresas()
    {
        return $this->belongsTo('app\emnpresa');
    }


    public function detallepresupuestos()
    {
        return $this->hasMany('app\detallepresupuesto');
    }



}
