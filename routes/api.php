<?php

use Illuminate\Http\Request;
use App\Http\Resources\UserCollection;
use App\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

*/
/* For users related api */
Route::apiResource('/users', 'Api\UserController');

Route::post('/user/teacher', 'Api\UserController@addTeacher');

Route::group(['prefix' => 'role'], function(){
   Route::get('/' , 'Api\RoleController@index');

   Route::get('/{role}', 'Api\RoleController@show');

   Route::get('/{role}/users', 'Api\RoleController@users');
});

Route::put('/users/{id}', function(Request $request, $id){
    $user = User::findOrFail($id);
    $user->update($request->all());

    return $user;
});

Route::delete('/users/{id}', function($id)
{
    App\User::find($id)->delete();
    return 204;
});
