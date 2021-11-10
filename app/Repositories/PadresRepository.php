<?php

namespace App\Repositories;

use App\Models\Padres;
use App\Repositories\BaseRepository;

/**
 * Class PadresRepository
 * @package App\Repositories
 * @version November 9, 2021, 7:26 am UTC
*/

class PadresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Usuario_Padre',
        'Nombre_Completo',
        'Telefono',
        'Correo_eletronico'
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
        return Padres::class;
    }
}
