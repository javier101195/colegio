<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $nombre
 * @property $semestre
 * @property $creditos
 * @property $maestro_id
 * @property $created_at
 * @property $updated_at
 *
 * @property CargaAcademica[] $cargaAcademicas
 * @property Maestro $maestro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'semestre' => 'required',
		'creditos' => 'required',
		'maestro_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','semestre','creditos','maestro_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cargaAcademicas()
    {
        return $this->hasMany('App\Models\CargaAcademica', 'materia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestro()
    {
        return $this->hasOne('App\Models\Maestro', 'id', 'maestro_id');
    }
    

}
