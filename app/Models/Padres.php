<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Padres
 * @package App\Models
 * @version November 9, 2021, 7:26 am UTC
 *
 * @property string $Usuario_Padre
 * @property string $Nombre_Completo
 * @property string $Telefono
 * @property string $Correo_eletronico
 */
class Padres extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'padres';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Usuario_Padre',
        'Nombre_Completo',
        'Telefono',
        'Correo_eletronico'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Usuario_Padre' => 'string',
        'Nombre_Completo' => 'string',
        'Telefono' => 'string',
        'Correo_eletronico' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Usuario_Padre' => 'required',
        'Nombre_Completo' => 'required',
        'Telefono' => 'required',
        'Correo_eletronico' => 'required'
    ];

    
}
