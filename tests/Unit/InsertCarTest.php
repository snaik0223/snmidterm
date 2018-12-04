<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = new Car();
        $car->Make = 'Lexus';
        $car->Model = '450h';
        $car->year = '2019';
        $this->assertTrue($car->save());
    }
}