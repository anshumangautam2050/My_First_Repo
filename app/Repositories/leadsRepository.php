<?php

namespace App\Repositories;

use App\Models\leads;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class leadsRepository
 * @package App\Repositories
 * @version September 23, 2018, 7:47 am UTC
 *
 * @method leads findWithoutFail($id, $columns = ['*'])
 * @method leads find($id, $columns = ['*'])
 * @method leads first($columns = ['*'])
*/
class leadsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return leads::class;
    }
}
