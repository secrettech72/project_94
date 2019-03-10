<?php

namespace App\Http\Controllers\Api;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\UserCollection as UserResourceCollection;

class RoleController extends Controller
{
    //

    /**
     * /api/role
     * return all roles
     * @return Role[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index(){
        return Role::all();
    }

    /**
     * /api/role/{id}
     * return description about certain role
     * @param Role $role
     * @return Role
     */

    public function show(Role $role){
        return $role;
    }

    public function users(Role $role){
        return new UserResourceCollection($role->users);
    }




}
