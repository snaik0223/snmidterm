<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CountUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountUser()
    {
        $userCount = 50;
        $users = factory(User::class, 28 )->create();
        $this->assertLessThanOrEqual( $userCount, \count( $users ) );
        $this->assertTrue(true);
    }
}
