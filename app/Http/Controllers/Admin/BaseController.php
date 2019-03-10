<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function loadViewData(){
        view()->composer($path, function ($view) {
            $view->with('base_route',$this->base_route);
            $view->with('panel',$this->panel);
        });
    }
}
