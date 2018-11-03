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

    public function testDeleteTest(){

        $user=new User();
        $user->name='Gordon Jerse';
        $user->email='kimnation@gmail.com';
        $user ->password='secret';
        $user->save();

        $this->assertTrue($user->delete());

    }
   


    }
