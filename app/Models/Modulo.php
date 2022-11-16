<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Modulo
 *
 * @property $id
 * @property $categoria_id
 * @property $nombre
 * @property $descripcion
 * @property $subestacion_id
 * @property $lat
 * @property $long
 * @property $fechaman
 * @property $mantenimiento
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Subestacione $subestacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Modulo extends Model
{
    
    static $rules = [
		'categoria_id' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'subestacion_id' => 'required',
		'lat' => 'required',
		'long' => 'required',
		'cuadrante' => 'required',
		'fechaman' => 'required',
		'mantenimiento' => 'required',
		'imagen' =>'required|image|mimes:png,jpeg,jpg,svg|max:1024'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_id','nombre','descripcion','subestacion_id','lat','long','cuadrante','fechaman','mantenimiento','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subestacione()
    {
        return $this->hasOne('App\Models\Subestacione', 'id', 'subestacion_id');
    }
    

}
