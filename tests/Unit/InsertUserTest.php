<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new User();
        $user->name = 'Stoner';
        $user->email = 'Stoner@gmail.com';
        $user->password = 'Stoner23';
        dd($user);
        $this->assertTrue($user->save());
    }
}
