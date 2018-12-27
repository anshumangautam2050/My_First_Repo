<?php

namespace App\Repositories;

use App\Models\lead_pictures;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class lead_picturesRepository
 * @package App\Repositories
 * @version September 23, 2018, 8:02 am UTC
 *
 * @method lead_pictures findWithoutFail($id, $columns = ['*'])
 * @method lead_pictures find($id, $columns = ['*'])
 * @method lead_pictures first($columns = ['*'])
*/
class lead_picturesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lead_id',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return lead_pictures::class;
    }
}
