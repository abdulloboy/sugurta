<?php

namespace App\Repositories;

use App\Models\Obyekt;
use App\Repositories\BaseRepository;

/**
 * Class ObyektRepository
 * @package App\Repositories
 * @version August 19, 2021, 11:07 am UTC
*/

class ObyektRepository extends BaseRepository
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
        return Obyekt::class;
    }
}
