<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveAllRequest;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();
        return view('projects.projectsIndex', compact('projects'));
    }

    public function create()
    {
        return view('projects.create',[
            'project' => new Project
        ]);
    }
    public function store(SaveAllRequest $request)
    {
        Project::create([
            'title'=> request('title'),
            'description'=>request('description')
        ]);

        return redirect()->route('projects.index')->with('status', '!! Chicho, el proyecto se ha creado correctamente');
    }

    public function show(Project $project)
    {
        return view('projects.projectsShow',[
            'project' => $project
        ]);
    }


    public function edit(Project $project)
    {
        return view('projects.projectsEdit',[
            'project' => $project
        ]);
    }


    public function update(Project $project, SaveAllRequest $request)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show', $project) -> with('status', '!! Chicho el proyecto se ha actualizado');
    }


    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index', $project) -> with('status', 'Chicho el proeycto se ha eliminado');
    }


}