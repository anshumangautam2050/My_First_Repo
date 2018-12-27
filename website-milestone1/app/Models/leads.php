<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class leads
 * @package App\Models
 * @version September 23, 2018, 7:47 am UTC
 *
 * @property boolean is_company
 * @property boolean is_person
 * @property string first_name
 * @property string last_name
 * @property string company
 * @property string vat_number
 * @property string mobile
 * @property string email
 * @property string description
 * @property string subject
 * @property string amount
 * @property string min_price
 * @property string type
 * @property boolean processed
 */
class leads extends Model
{
    use SoftDeletes;

    public $table = 'leads';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'is_company',
        'is_person',
        'first_name',
        'last_name',
        'company',
        'vat_number',
        'mobile',
        'email',
        'description',
        'subject',
        'amount',
        'min_price',
        'type',
        'processed'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'is_company' => 'boolean',
        'is_person' => 'boolean',
        'first_name' => 'string',
        'last_name' => 'string',
        'company' => 'string',
        'vat_number' => 'string',
        'mobile' => 'string',
        'email' => 'string',
        'description' => 'string',
        'subject' => 'string',
        'amount' => 'string',
        'min_price' => 'string',
        'type' => 'string',
        'processed' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'company' => 'required_if:seller,company',
        'vat_number' => 'required_if:seller,company',
        'first_name' => 'required',
        'email' => 'required|email',
        'pictures.*' => 'file|image|max:1024'
    ];

    public function lead_pictures()
    {
        return $this->hasMany(lead_pictures::class,'lead_id');
    }

    public function lead_type()
    {
        return $this->belongsTo(lead_types::class,'type');
    }

}
