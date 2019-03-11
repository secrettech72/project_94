<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   protected $base_route = 'dashboard';
   protected $panel = 'Dashboard';
    public function index(){ //test
        $panel= 'Dashboard';
        return view('admin.index',compact([$this->panel=>'panel']));
    }
}
