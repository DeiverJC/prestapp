<?php

namespace App\Repositories;

use App\Models\Bank;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BankRepository
 * @package App\Repositories
 * @version May 20, 2018, 11:26 pm UTC
 *
 * @method Bank findWithoutFail($id, $columns = ['*'])
 * @method Bank find($id, $columns = ['*'])
 * @method Bank first($columns = ['*'])
*/
class BankRepository extends BaseRepository
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
        return Bank::class;
    }
}
