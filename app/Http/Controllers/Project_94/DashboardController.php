<?php

namespace App\Http\Controllers\Project_94;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('project_94.index');
    }
}
