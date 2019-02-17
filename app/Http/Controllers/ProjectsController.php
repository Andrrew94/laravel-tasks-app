<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects/index', compact('projects'));
    }

    public function create()
    {
        return view('projects/create');
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Project::create($validated);

        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects/edit',compact('project'));
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return view('projects/view', compact('project'));
    }
}
