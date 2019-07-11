<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('projects.create', [
            'projects' => Project::all()
        ]);
    }

    /**
     * @throws ValidationException
     */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        Project::forceCreate([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return ['message' => 'Project Created'];
    }
}
