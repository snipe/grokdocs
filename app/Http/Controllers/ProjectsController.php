<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

use App\Http\Requests;


class ProjectsController extends Controller
{
    public function show($slug) {

        $project = Project::findBySlug($slug);
        return view('projects.show')->with('project', $project);

    }
}
