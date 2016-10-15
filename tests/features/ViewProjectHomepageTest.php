<?php

use App\Project;
use App\User;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewProjectHomepageTest extends TestCase
{
    use DatabaseMigrations;

    public function testViewProjectHomepage()
    {
        factory(Project::class)->create(['name' => 'Test Project', 'user_id' => 1, 'slug' => 'testproject']);

        $this->visit('/projects/testproject')
            ->see('Test Project');
    }
}
