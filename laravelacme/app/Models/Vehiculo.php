<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Builder;


class Vehiculo extends Model
{
    
    protected $table= 'vehiculos';
      public $timestamps = false;     
    
    protected $primaryKey = 'idvehiculos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idvehiculos','placa','color','marca','tipodevehiculo','idusuariovehiculo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipovehiculo()
    {
        return $this->hasOne('App\Models\Tipovehiculo', 'idtipovehiculo', 'tipodevehiculo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'idusuario', 'idusuariovehiculo');
    }
    

}
