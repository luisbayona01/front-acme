<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipousuario
 *
 * @property $idtipousuario
 * @property $tipousuario
 *
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipousuario extends Model
{
    
    static $rules = [
		'idtipousuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idtipousuario','tipousuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'tipousuario', 'idtipousuario');
    }
    

}
