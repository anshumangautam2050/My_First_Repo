<?php

namespace App\Repositories;

use App\Models\mail_templates;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class mail_templatesRepository
 * @package App\Repositories
 * @version December 20, 2018, 3:08 am UTC
 *
 * @method mail_templates findWithoutFail($id, $columns = ['*'])
 * @method mail_templates find($id, $columns = ['*'])
 * @method mail_templates first($columns = ['*'])
*/
class mail_templatesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return mail_templates::class;
    }
}
