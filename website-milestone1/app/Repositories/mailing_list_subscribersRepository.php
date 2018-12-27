<?php

namespace App\Repositories;

use App\Models\mailing_list_subscribers;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class mailing_list_subscribersRepository
 * @package App\Repositories
 * @version December 20, 2018, 3:08 am UTC
 *
 * @method mailing_list_subscribers findWithoutFail($id, $columns = ['*'])
 * @method mailing_list_subscribers find($id, $columns = ['*'])
 * @method mailing_list_subscribers first($columns = ['*'])
*/
class mailing_list_subscribersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'list_uid',
        'opt_in',
        'first_name',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return mailing_list_subscribers::class;
    }
}
