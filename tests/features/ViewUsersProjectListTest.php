<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;
use App\Project;

class ViewUsersProjectListTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testViewUsersProjectList()
    {
        $user = factory(User::class)->create(['username' => 'janedoe']);
        $project = factory(Project::class)->make(['summary' => 'This is my project!']);

        $this->visit('/janedoe')
            ->see('This is my project!');
    }
}
