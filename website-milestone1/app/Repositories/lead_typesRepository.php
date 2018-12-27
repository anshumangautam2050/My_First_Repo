<?php

namespace App\Repositories;

use App\Models\lead_types;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class lead_typesRepository
 * @package App\Repositories
 * @version September 24, 2018, 3:48 am UTC
 *
 * @method lead_types findWithoutFail($id, $columns = ['*'])
 * @method lead_types find($id, $columns = ['*'])
 * @method lead_types first($columns = ['*'])
*/
class lead_typesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return lead_types::class;
    }
}
