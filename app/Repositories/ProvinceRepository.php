<?php

namespace App\Repositories;

use App\Models\Province;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProvinceRepository
 * @package App\Repositories
 * @version October 29, 2018, 9:46 am UTC
 *
 * @method Province findWithoutFail($id, $columns = ['*'])
 * @method Province find($id, $columns = ['*'])
 * @method Province first($columns = ['*'])
*/
class ProvinceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Province::class;
    }
}
