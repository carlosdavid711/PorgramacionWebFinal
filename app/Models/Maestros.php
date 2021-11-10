<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Maestros
 * @package App\Models
 * @version November 9, 2021, 7:22 am UTC
 *
 * @property string $Carnet
 * @property string $Nombre_Completo
 * @property string $Fecha_Nacimiento
 * @property string $edad
 */
class Maestros extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'maestros';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Carnet',
        'Nombre_Completo',
        'Fecha_Nacimiento',
        'edad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Carnet' => 'string',
        'Nombre_Completo' => 'string',
        'Fecha_Nacimiento' => 'string',
        'edad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Carnet' => 'required',
        'Nombre_Completo' => 'required',
        'Fecha_Nacimiento' => 'required'
    ];

    
}
