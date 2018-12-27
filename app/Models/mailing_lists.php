<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mailing_lists
 * @package App\Models
 * @version December 20, 2018, 3:08 am UTC
 *
 * @property string uid
 * @property boolean public
 * @property string name
 * @property string info
 */
class mailing_lists extends Model
{
    use SoftDeletes;

    public $table = 'mailing_lists';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'uid',
        'public',
        'name',
        'info'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'uid' => 'string',
        'public' => 'boolean',
        'name' => 'string',
        'info' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
