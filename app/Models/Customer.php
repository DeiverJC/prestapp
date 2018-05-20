<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package App\Models
 * @version May 20, 2018, 10:38 pm UTC
 *
 * @property \App\Models\Banc banc
 * @property \App\Models\Company company
 * @property \Illuminate\Database\Eloquent\Collection Loan
 * @property string fist_name
 * @property string last_name
 * @property integer dni
 * @property integer cellphone
 * @property string address
 * @property integer banc_id
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
        'dni',
        'cellphone',
        'address',
        'banc_id',
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
        'dni' => 'integer',
        'cellphone' => 'integer',
        'address' => 'string',
        'banc_id' => 'integer',
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
    public function banc()
    {
        return $this->belongsTo(\App\Models\Banc::class, 'banc_id', 'id');
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
