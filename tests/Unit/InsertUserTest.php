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
     * */

    public function testExample()
   {
        $user = new User();
       $data =  [
           'name' => str_random(7),
           'email' => str_random(9).'@testing.com',
           'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
           'remember_token' => str_random(9),
       ];
       $user = User::create($data);
       $this->assertInstanceOf(User::class, $user);
       $this->assertEquals($data['name'], $user->name);
       $this->assertEquals($data['email'], $user->email);
       $this->assertEquals($data['password'], $user->password);
    }
}
