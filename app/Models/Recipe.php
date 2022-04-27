<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recipe
 *
 * @property $id
 * @property $descripcion
 * @property $medicamento
 * @property $presentacion
 * @property $dosis
 * @property $duracion
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recipe extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'medicamento' => 'required',
		'presentacion' => 'required',
		'dosis' => 'required',
		'duracion' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','medicamento','presentacion','dosis','duracion','cantidad'];



}
