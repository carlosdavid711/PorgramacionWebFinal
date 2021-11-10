<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Curso
 * @package App\Models
 * @version November 9, 2021, 7:23 am UTC
 *
 * @property string $Codigo_Curso
 * @property string $Nombre_Curso
 * @property string $Descripcion
 */
class Curso extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cursos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Codigo_Curso',
        'Nombre_Curso',
        'Descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Codigo_Curso' => 'string',
        'Nombre_Curso' => 'string',
        'Descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Codigo_Curso' => 'required',
        'Nombre_Curso' => 'required',
        'Descripcion' => 'required'
    ];

    
}
