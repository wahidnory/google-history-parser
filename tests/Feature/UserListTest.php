<?php
/**
 * Created by PhpStorm.
 * User: wahid
 * Date: 28-5-18
 * Time: 22:35
 */

namespace Tests\Feature;


use Illuminate\Support\Collection;
use MileageApi\Entities\User;
use Tests\TestCase;

class UserListTest extends TestCase
{
    /**
     * @var Collection
     * User collection fixture.
     */
    private $_users;

    public function setUp()
    {
        parent::setUp();
        $this->_users = factory(User::class, 10)->create();
    }

    /** @test */
    public function it_should_have_users_endpoint()
    {
        $response = $this->get('/api/user');

        $response->assertStatus(200);
    }

    /** @test */
    public function it_should_list_all_users()
    {
        $response = $this->get('/api/user');
        $response->assertJson($this->_users->toArray());
    }
}