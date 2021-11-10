<?php

namespace App\Repositories;

use App\Models\Asignacion_cursos;
use App\Repositories\BaseRepository;

/**
 * Class Asignacion_cursosRepository
 * @package App\Repositories
 * @version November 9, 2021, 7:28 am UTC
*/

class Asignacion_cursosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return Asignacion_cursos::class;
    }
}
