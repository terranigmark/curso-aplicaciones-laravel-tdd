<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repository;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'repositories' => Repository::latest()->get()
        ]);
    }
}
