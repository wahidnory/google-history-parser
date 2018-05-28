<?php

namespace MileageApi\Http\Controllers\Users;

use MileageApi\Http\Controllers\Controller;
use MileageApi\Repositories\User\UserRepository;


class UserController extends Controller
{
    /**
     * @var UserRepository
     * private User repository to interact with the user entity
     */
    private  $_repository;

    /**
     * UserController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->_repository = $userRepository;
    }

    /**
     * Index function
     */
    public function index()
    {
        return $this->_repository->getAllUsers();
    }
}