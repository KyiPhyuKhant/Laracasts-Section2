<?php

namespace App\Http\Controllers;


use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));;
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Project::create(request(['title', 'description']));

        return redirect('/projects');
    }
}
