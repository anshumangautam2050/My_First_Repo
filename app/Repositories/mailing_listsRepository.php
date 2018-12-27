<?php

namespace App\Repositories;

use App\Models\mailing_lists;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class mailing_listsRepository
 * @package App\Repositories
 * @version December 20, 2018, 3:08 am UTC
 *
 * @method mailing_lists findWithoutFail($id, $columns = ['*'])
 * @method mailing_lists find($id, $columns = ['*'])
 * @method mailing_lists first($columns = ['*'])
*/
class mailing_listsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'uid',
        'public',
        'name',
        'info'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return mailing_lists::class;
    }
}
