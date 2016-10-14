<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function testAUserCanBeFoundByUsername()
    {
        $createdUser = factory(User::class)->create(['username' => 'janedoe']);
        $foundUser = User::findByUsername('janedoe');

        $this->assertEquals($createdUser->id, $foundUser->id);
        $this->assertEquals($createdUser->username, $foundUser->username);
    }
}
