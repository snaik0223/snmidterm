<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testDeleteCar()
    {
        $car = new Car();
        $car->Make = 'BMW';
        $car->Model = '5S';
        $car->year = '2019';
        $car->save();
       $this->assertTrue($car->delete());
    }
}
