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
        $project = factory(Project::class)->make(['name' => 'Test Project']);

        $this->visit('/janedoe')
            ->see('Test Project');
    }
}
