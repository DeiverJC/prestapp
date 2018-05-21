<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LoanDetail
 * @package App\Models
 * @version May 21, 2018, 5:04 am UTC
 *
 * @property \App\Models\Loan loan
 * @property integer fee
 * @property integer balance
 * @property integer loan_id
 */
class LoanDetail extends Model
{
    use SoftDeletes;

    public $table = 'loan_details';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fee',
        'balance',
        'loan_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fee' => 'integer',
        'balance' => 'integer',
        'loan_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fee' => 'required',
        'balance' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function loan()
    {
        return $this->belongsTo(\App\Models\Loan::class, 'loan_id', 'id');
    }
}
