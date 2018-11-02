<?php

namespace Tests\Unit;

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
        $user=new User();
        $user->name='Gordon Jersey';
        $user->email='GORDONJERSEY@gmail.com';
        $user ->password='secret';

        $this->assertTrue($user->save());
    }
}
