<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;
use App\Project;

class ViewUsersProjectListTest extends TestCase
{
    use DatabaseMigrations;

    public function testViewUsersProjectList()
    {
        $user = factory(User::class)->create(['username' => 'janedoe']);
        $project = factory(Project::class)->make(['name' => 'Test Project']);
        $user->projects()->save($project);

        $this->visit('/janedoe')
            ->see('Test Project');
    }
}
