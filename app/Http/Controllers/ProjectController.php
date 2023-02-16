<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects');
    }

    public function ryurikowebsite()
    {
        return redirect('ryurikowebsite.epizy.com');
    }
}
