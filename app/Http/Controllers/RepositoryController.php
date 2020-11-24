<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required',
            'description' => 'required',
        ]);

        $request->user()->repositories()->create($request->all());

        return redirect()->route('repositories.index');
    }

    public function update(Request $request, Repository $repository)
    {
        $request->validate([
            'url' => 'required',
            'description' => 'required',
        ]);

        if ($request->user()->id != $repository->user_id) {
            abort(403);
        }
        
        $repository->update($request->all());

        return redirect()->route('repositories.edit', $repository);
    }

    public function destroy(Repository $repository)
    {
        $repository->delete();

        return redirect()->route('repositories.index');
    }
}
