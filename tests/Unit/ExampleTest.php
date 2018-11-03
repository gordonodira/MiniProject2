<?php

namespace Tests\Unit;

use App\Car;
use PHPUnit\Framework\Constraint\IsType;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = new User();
        $user->name = 'Gordon Jersey';
        $user->email = 'GORDONJERSEY@gmail.com';
        $user->password = 'secret';

        $this->assertTrue($user->save());
    }

    public function testDeleteTest()
    {

        $user = new User();
        $user->name = 'Gordon Jerse';
        $user->email = 'kimnation@gmail.com';
        $user->password = 'secret';
        $user->save();

        $this->assertTrue($user->delete());

    }

    public function testRecordCount()
    {
        $users = User::All();

        $recordCount = $users->Count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount);
        $recordCount = $users->count();
    }

    public function testCarTest()
    {

        $car = new Car();
        $car->make = 'Toyota';
        $car->model = 'CARC';
        $car->year = '1999';

        $this->assertTrue($car->save());
    }

    public function testCarDeleteTest()
    {

        $car = new Car();
        $car->make = 'Toyota';
        $car->model = 'CARC';
        $car->year = '1999';
        $car->save();

        $this->assertTrue($car->delete());
    }

    public function testRecordCountCar()
    {
        $cars = Car::All();

        $recordCount = $cars->Count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount);
        $recordCount = $cars->count();
}
}