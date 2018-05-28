<?php
/**
 * Created by PhpStorm.
 * User: wahid
 * Date: 28-5-18
 * Time: 22:20
 */

namespace MileageApi\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    /**
     * @var $_model
     * Generic model accessor for the repository to interact with.
     */
    private $_model;

    /**
     * Gets the active model.
     * @return mixed
     */
    public function getModel()
    {
        return $this->_model;
    }

    /**
     * Sets an Eloquent model for the repository to use.
     * @param Model $model
     */
    public function setModel(Model $model)
    {
        $this->_model = $model;
    }
}