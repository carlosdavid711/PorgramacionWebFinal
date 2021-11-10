<?php

namespace App\Repositories;

use App\Models\Maestros;
use App\Repositories\BaseRepository;

/**
 * Class MaestrosRepository
 * @package App\Repositories
 * @version November 9, 2021, 7:22 am UTC
*/

class MaestrosRepository extends BaseRepository
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
        return Maestros::class;
    }
}
