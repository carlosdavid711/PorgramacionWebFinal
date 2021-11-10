<?php

namespace App\Repositories;

use App\Models\Gestion_notas;
use App\Repositories\BaseRepository;

/**
 * Class Gestion_notasRepository
 * @package App\Repositories
 * @version November 9, 2021, 7:28 am UTC
*/

class Gestion_notasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Zona',
        'Examen',
        'final'
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
        return Gestion_notas::class;
    }
}
