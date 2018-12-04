<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class UpdateCarYr2000Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCarYr2000()

    {
        $car = Car::find(40);
        $car_year = (int) $car->year;
        $this->assertInternalType('integer', $car_year);
    }
}