<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mail_templates
 * @package App\Models
 * @version December 20, 2018, 3:08 am UTC
 *
 * @property string uid
 * @property boolean system
 * @property string name
 * @property string sender_name
 * @property string sender_email
 * @property string subject
 * @property string body
 * @property string info
 */
class mail_templates extends Model
{
    use SoftDeletes;

    public $table = 'mail_templates';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'uid',
        'system',
        'name',
        'sender_name',
        'sender_email',
        'subject',
        'body',
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
        'system' => 'boolean',
        'name' => 'string',
        'sender_name' => 'string',
        'sender_email' => 'string',
        'subject' => 'string',
        'body' => 'string',
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
