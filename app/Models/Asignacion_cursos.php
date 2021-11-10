<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Asignacion_cursos
 * @package App\Models
 * @version November 9, 2021, 7:28 am UTC
 *
 */
class Asignacion_cursos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'asignacion_cursos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
