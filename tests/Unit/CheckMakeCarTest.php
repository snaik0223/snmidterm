<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CheckMakeCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCheckMakeCar()
    {
        $makeArray = ['Ford','Honda' ,'Toyota'];
        //just creating a new car or we can get from database too

        //factory(Car::class)->create();

        $car = Car::find(48);
        $this->assertContains($car->make, $makeArray);
    }
}
