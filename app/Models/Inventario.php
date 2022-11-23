<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property $id
 * @property $modulo_id
 * @property $Panel
 * @property $Puertopanel
 * @property $Distancia
 * @property $Ubicacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Modulo $modulo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    
    static $rules = [
		'modulo_id' => 'required',
		'Panel' => 'required',
		'Puertopanel' => 'required',
		'Distancia' => 'required',
		'Ubicacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['modulo_id','Panel','Puertopanel','Distancia','Ubicacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modulo()
    {
        return $this->hasOne('App\Models\Modulo', 'id', 'modulo_id');
    }
    

}
