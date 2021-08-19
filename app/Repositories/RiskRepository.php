<?php

namespace App\Repositories;

use App\Models\Risk;
use App\Repositories\BaseRepository;

/**
 * Class RiskRepository
 * @package App\Repositories
 * @version August 19, 2021, 11:08 am UTC
*/

class RiskRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'klass'
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
        return Risk::class;
    }
}
