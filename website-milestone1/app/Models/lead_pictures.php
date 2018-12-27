<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class lead_pictures
 * @package App\Models
 * @version September 23, 2018, 8:02 am UTC
 *
 * @property \App\Models\Lead lead
 * @property integer lead_id
 * @property string url
 */
class lead_pictures extends Model
{
    use SoftDeletes;

    public $table = 'lead_pictures';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'lead_id',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lead_id' => 'integer',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function lead()
    {
        return $this->belongsTo(\App\Models\Lead::class);
    }
}
