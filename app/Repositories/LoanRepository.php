<?php

namespace App\Repositories;

use App\Models\Loan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LoanRepository
 * @package App\Repositories
 * @version May 21, 2018, 2:57 am UTC
 *
 * @method Loan findWithoutFail($id, $columns = ['*'])
 * @method Loan find($id, $columns = ['*'])
 * @method Loan first($columns = ['*'])
*/
class LoanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'principal',
        'interest',
        'term',
        'fee',
        'type_term'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Loan::class;
    }
}
