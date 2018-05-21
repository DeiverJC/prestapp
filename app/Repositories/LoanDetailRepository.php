<?php

namespace App\Repositories;

use App\Models\LoanDetail;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LoanDetailRepository
 * @package App\Repositories
 * @version May 21, 2018, 5:04 am UTC
 *
 * @method LoanDetail findWithoutFail($id, $columns = ['*'])
 * @method LoanDetail find($id, $columns = ['*'])
 * @method LoanDetail first($columns = ['*'])
*/
class LoanDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fee',
        'balance'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return LoanDetail::class;
    }
}
