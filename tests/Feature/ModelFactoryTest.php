<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class ModelFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function factory()
    {
        $user = factory(User::class)->make();
        $this->assertInstanceOf(User::class, $user);
        $this->assertArrayHasKey('name', $user->toArray());
        $this->assertArrayHasKey('email', $user->toArray());
        // hidden
        $this->assertArrayNotHasKey('password', $user->toArray());
        $this->assertArrayNotHasKey('remenber_token', $user->toArray());
    }

    /**
     * @test
     */
    public function api()
    {
        $user = factory(User::class)->make();
        $param = $user->toArray();

        $res = $this->postJson(route('test-post'), $param);
        $res->assertStatus(200);
    }

    /**
     * @test
     */
    public function otherRepo()
    {
        $userB = factory(\OtherApp\User::class)->make();
        $this->assertInstanceOf(\OtherApp\User::class, $userB);
    }
}