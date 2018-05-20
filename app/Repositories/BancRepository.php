<?php

namespace App\Repositories;

use App\Models\Banc;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BancRepository
 * @package App\Repositories
 * @version May 20, 2018, 10:29 pm UTC
 *
 * @method Banc findWithoutFail($id, $columns = ['*'])
 * @method Banc find($id, $columns = ['*'])
 * @method Banc first($columns = ['*'])
*/
class BancRepository extends BaseRepository
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
        return Banc::class;
    }
}
