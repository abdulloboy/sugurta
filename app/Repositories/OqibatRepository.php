<?php

namespace App\Repositories;

use App\Models\Oqibat;
use App\Repositories\BaseRepository;

/**
 * Class OqibatRepository
 * @package App\Repositories
 * @version August 19, 2021, 11:08 am UTC
*/

class OqibatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom'
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
        return Oqibat::class;
    }
}
