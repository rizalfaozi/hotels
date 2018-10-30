<?php

namespace App\Repositories;

use App\Models\Chat;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ChatRepository
 * @package App\Repositories
 * @version October 29, 2018, 11:31 pm UTC
 *
 * @method Chat findWithoutFail($id, $columns = ['*'])
 * @method Chat find($id, $columns = ['*'])
 * @method Chat first($columns = ['*'])
*/
class ChatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Chat::class;
    }
}
