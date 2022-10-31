<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Usuario extends Model
{
    
  

      protected $table= 'usuario';
      public $timestamps = false;     
    
    protected $primaryKey = 'idusuario';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idusuario','numerodecedula','primernombre','segundonombre','apellidos','telefono','ciudad','tipousuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipousuario()
    {
        return $this->hasOne('App\Models\Tipousuario', 'idtipousuario', 'tipousuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo', 'idusuariovehiculo', 'idusuario');
    }
    

}
