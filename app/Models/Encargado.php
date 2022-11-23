<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Encargado
 *
 * @property $id
 * @property $nombre
 * @property $Notas
 * @property $created_at
 * @property $updated_at
 *
 * @property Modulo[] $modulos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Encargado extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'Notas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','Notas'];


    public function modulos()
    {
        return $this->hasMany('App\Models\Modulo', 'encargados_id', 'id');
    }
}
