<?php

namespace App\Repositories;

use App\Models\Estudiante;
use App\Repositories\BaseRepository;

/**
 * Class EstudianteRepository
 * @package App\Repositories
 * @version November 9, 2021, 7:20 am UTC
*/

class EstudianteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Carnet',
        'Nombre_Completo',
        'Fecha_Nacimiento',
        'edad'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estudiante::class;
    }
}
