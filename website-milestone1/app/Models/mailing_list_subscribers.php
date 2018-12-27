<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mailing_list_subscribers
 * @package App\Models
 * @version December 20, 2018, 3:08 am UTC
 *
 * @property string list_uid
 * @property boolean opt_in
 * @property string first_name
 * @property string email
 */
class mailing_list_subscribers extends Model
{
    use SoftDeletes;

    public $table = 'mailing_list_subscribers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'list_uid',
        'opt_in',
        'first_name',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'list_uid' => 'string',
        'opt_in' => 'boolean',
        'first_name' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
