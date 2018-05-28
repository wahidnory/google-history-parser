<?php
/**
 * Created by PhpStorm.
 * User: wahid
 * Date: 28-5-18
 * Time: 22:45
 */

namespace Tests\Unit\Repositories;


use Illuminate\Support\Collection;
use MileageApi\Entities\User;
use MileageApi\Repositories\User\UserRepository;
use Mockery;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    /** @test */
    public function it_should_instantiate_userRepository_with_user_model()
    {
        $userMock = Mockery::mock(User::class);
        $userRepository = new UserRepository($userMock);
        $this->assertNotNull($userRepository);
    }

    /** @test */
    public function it_should_call_all_on_model()
    {
        $model = Mockery::mock(User::class);
        $userRepository = new UserRepository($model);

        $model->shouldReceive('all')->andReturn(Collection::class);
        $this->assertEquals(Collection::class, $userRepository->getAllUsers());
    }
}