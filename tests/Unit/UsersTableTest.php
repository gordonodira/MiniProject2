<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTableTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user=User::find(1);
        $this->assertInternalType('int',$user->id);
        //$this->assertTrue(true);
    }
}
