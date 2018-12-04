<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdateUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUser()

    /** updating user 42. Kevon Stracke $user */

    {
        $user = User::find(78);
        $user->name = 'Steve Smith';
        $this->assertTrue($user->save());
    }
}
