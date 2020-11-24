<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    public function store(Request $request)
    {
        $request->user()->repositories()->create($request->all());

        return redirect()->route('repositories.index');
    }
}
