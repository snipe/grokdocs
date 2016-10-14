<?php

use App\Project;
use App\User;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewProjectHomepageTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testViewProjectHomepage()
    {
        $project = factory(Project::class)->make(['name' => 'Test Project']);

        $this->visit('/')
            ->see('Laravel');
    }
}
