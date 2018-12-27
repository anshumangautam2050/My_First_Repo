<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Helpers\Helper;

/**
 * Class users
 * @package App\Models
 * @version September 23, 2018, 5:00 am UTC
 *
 * @property string email
 * @property string password
 * @property string user_number
 * @property string first_name
 * @property string last_name
 * @property string id_number
 * @property string mobile
 * @property boolean is_admin
 * @property boolean is_freq_seller
 * @property boolean is_curator
 * @property string remember_token
 */
class users extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'email',
        'password',
        'user_number',
        'first_name',
        'last_name',
        'id_number',
        'mobile',
        'is_admin',
        'is_freq_seller',
        'is_curator',
        'is_client',
        'is_system_mail',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string',
        'password' => 'string',
        'user_number' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'id_number' => 'string',
        'mobile' => 'string',
        'is_admin' => 'boolean',
        'is_freq_seller' => 'boolean',
        'is_curator' => 'boolean',
        'is_client' => 'boolean',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model){
            $model->user_number = mt_rand(1111111,9999999);
            $model->password = bcrypt(Helper::uid(12));
        });

        static::updating(function ($model){
            unset($model->user_number);
        });
    }
    
}
