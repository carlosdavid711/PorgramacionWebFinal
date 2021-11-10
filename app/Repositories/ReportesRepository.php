<?php

namespace App\Repositories;

use App\Models\Reportes;
use App\Repositories\BaseRepository;

/**
 * Class ReportesRepository
 * @package App\Repositories
 * @version November 9, 2021, 7:28 am UTC
*/

class ReportesRepository extends BaseRepository
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
        return Reportes::class;
    }
}
