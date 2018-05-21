<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package App\Models
 * @version May 20, 2018, 11:32 pm UTC
 *
 * @property \App\Models\Bank bank
 * @property \App\Models\Company company
 * @property \Illuminate\Database\Eloquent\Collection Loan
 * @property string fist_name
 * @property string last_name
 * @property integer dni
 * @property integer cellphone
 * @property string address
 * @property integer bank_id
 * @property integer company_id
 */
class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fist_name',
        'last_name',
        'full_name',
        'dni',
        'cellphone',
        'address',
        'bank_id',
        'company_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fist_name' => 'string',
        'last_name' => 'string',
        'full_name' => 'string',
        'dni' => 'integer',
        'cellphone' => 'integer',
        'address' => 'string',
        'bank_id' => 'integer',
        'company_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fist_name' => 'required',
        'last_name' => 'required',
        'dni' => 'required',
        'cellphone' => 'required',
        'address' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     **/
    public function bank()
    {
        return $this->belongsTo(\App\Models\Bank::class, 'bank_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     **/
    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class, 'company_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function loans()
    {
        return $this->hasMany(\App\Models\Loan::class);
    }
}
