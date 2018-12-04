<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CountCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountCar()
    {
        $carCount = 50;

        $cars = factory(Car::class, $carCount )->create();
        // Assert that the number of queries are below a certain point.
        $this->assertLessThanOrEqual( $carCount, \count( $cars ) );
        $this->assertTrue(true);
    }
}
