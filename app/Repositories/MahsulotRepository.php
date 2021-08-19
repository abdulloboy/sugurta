<?php

namespace App\Repositories;

use App\Models\Mahsulot;
use App\Repositories\BaseRepository;

/**
 * Class MahsulotRepository
 * @package App\Repositories
 * @version August 19, 2021, 12:25 pm UTC
*/

class MahsulotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'obyekt_id',
        'Nom',
        'yaratilgan_sana',
        'risk',
        'oqibat'
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
        return Mahsulot::class;
    }

    public function create($input)
    {
        $model = $this->model->newInstance();
        
        $risks=$input['risks'];
        $oqibats=$input['oqibats'];
        unset($input['risks']);
        unset($input['oqibats']);
        
        $model->fill($input);
        $model->save();

        $model->risks()->sync($risks);
        $model->oqibats()->sync($oqibats);
        $model->save();
        
        return $model;
    }

    public function update($input, $id)
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        $risks=$input['risks'];
        $oqibats=$input['oqibats'];
        unset($input['risks']);
        unset($input['oqibats']);
        
        $model->fill($input);

        $model->risks()->sync($risks);
        $model->oqibats()->sync($oqibats);
        
        $model->save();
        return $model;
    }
}
