<?php

namespace App\Repositories;

use App\Models\users;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class usersRepository
 * @package App\Repositories
 * @version September 23, 2018, 5:00 am UTC
 *
 * @method users findWithoutFail($id, $columns = ['*'])
 * @method users find($id, $columns = ['*'])
 * @method users first($columns = ['*'])
*/
class usersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return users::class;
    }
}
