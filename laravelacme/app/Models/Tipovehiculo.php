<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipovehiculo
 *
 * @property $idtipovehiculo
 * @property $tipovehiculo
 *
 * @property Vehiculo[] $vehiculos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipovehiculo extends Model
{
    
    static $rules = [
		'idtipovehiculo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idtipovehiculo','tipovehiculo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo', 'tipodevehiculo', 'idtipovehiculo');
    }
    

}
