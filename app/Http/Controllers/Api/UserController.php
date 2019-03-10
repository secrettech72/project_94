<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\TeacherDetail;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResource;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new UserCollection(User::all());
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return new UserResource(User::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addTeacher(Request $request){
        $user = User::create([
            'name' => $request->fname . " " . $request->lname,
            'email' => $request->email,
            'role_id' => 1,
            'password' => $request->password,
        ]);

        TeacherDetail::create([
            'avatar' => 'uploads/teacher.png',
            'address' => $request->address,
            'phone_number' => $request->phone,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'user_id' => $user->id
        ]);

        return $user;

    }


}
