<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bank
 * @package App\Models
 * @version May 20, 2018, 11:26 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Customer
 * @property string name
 */
class Bank extends Model
{
    use SoftDeletes;

    public $table = 'banks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function customers()
    {
        return $this->hasMany(\App\Models\Customer::class);
    }
}
