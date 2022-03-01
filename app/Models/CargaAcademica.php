<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CargaAcademica
 *
 * @property $id
 * @property $user_id
 * @property $materia_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Materia $materia
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CargaAcademica extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'materia_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','materia_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne('App\Models\Materia', 'id', 'materia_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
