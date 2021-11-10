<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Gestion_notas
 * @package App\Models
 * @version November 9, 2021, 7:28 am UTC
 *
 * @property string $Zona
 * @property string $Examen
 * @property string $final
 */
class Gestion_notas extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'gestion_notas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Zona',
        'Examen',
        'final'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Zona' => 'string',
        'Examen' => 'string',
        'final' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Zona' => 'required',
        'Examen' => 'required'
    ];

    
}
