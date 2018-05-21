<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Loan
 * @package App\Models
 * @version May 21, 2018, 2:57 am UTC
 *
 * @property \App\Models\Customer customer
 * @property integer principal
 * @property integer interest
 * @property integer term
 * @property integer fee
 * @property string type_term
 * @property integer customer_id
 */
class Loan extends Model
{
    use SoftDeletes;

    public $table = 'loans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'principal',
        'interest',
        'term',
        'fee',
        'type_term',
        'customer_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'principal' => 'integer',
        'interest' => 'integer',
        'term' => 'integer',
        'fee' => 'integer',
        'type_term' => 'string',
        'customer_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'principal' => 'required',
        'interest' => 'required',
        'term' => 'required',
        'fee' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id', 'id');
    }
}
