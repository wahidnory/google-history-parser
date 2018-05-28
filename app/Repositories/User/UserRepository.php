<?php

namespace MileageApi\Repositories\User;

use Illuminate\Database\Eloquent\Collection;
use MileageApi\Entities\User;
use MileageApi\Repositories\BaseRepository;

/**
 * Class UserRepository
 *
 * @package MileageApi\Repositories\User
 */
class UserRepository extends BaseRepository
{
    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->setModel($model);
    }

    /**
     * List all users
     *
     * @return Collection
     * Contains all the users
     */
    public function getAllUsers()
    {
        return $this->getModel()->all();
    }
}