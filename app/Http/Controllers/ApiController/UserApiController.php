<?php

namespace App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Resources\User as UserApi;
class UserApiController extends Controller
{
    public function index(){
     $user = User::all();
     return $user;
   }
}
