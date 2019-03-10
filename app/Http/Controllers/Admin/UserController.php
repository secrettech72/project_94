<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
   protected $base_route = 'admin.user';
   protected $panel = 'User';
    public function index(){
        $data['rows'] = User::all();
        return view($this->base_route.'.index',compact(['data','panel'=>$this->panel]));
    }

    public function create(){
        return view($this->base_route.'.add',compact(['panel'=>$this->panel]));
    }
    public function store(Request $request){
        if ($request->has('profile_images')) {
            $file_name = $this->panel.'' . time() . rand(0, 999999) . $request->file('profile_images')->getClientOriginalName();
            $folder_path = public_path(). DIRECTORY_SEPARATOR . 'Images' . DIRECTORY_SEPARATOR . 'User' . DIRECTORY_SEPARATOR;
            if (!is_dir($folder_path)) {
                $folder = mkdir($folder_path, 0777, true);
            }
            $request->file('profile_images')->move($folder_path,$file_name);
        }
        $panel = 'User';
        User::create([
            'email' => $request->email,
            'password' =>bcrypt($request->password),
            'first_name' => $request->first_name,
            'profile_images' => isset($file_name) ? $file_name : '',
            'last_name' => $request->last_name,
            'role_id' => $request->role_id,
            'status' => $request->status,
        ]);
        $request->session()->flash('session','Success The '.$this->panel.' Has Been Added Successfully');
        return redirect()->route($this->base_route);
    }

    public function edit(Request $request,$id){
        $panel = 'User';
        if($data['row'] = User::find($id)){
            return view($this->base_route.'.edit',compact('data'));
        }else{
            $request->session()->flash('session','Sorry The '.$this->panel.' is not found');
            return redirect()->route($this-base_route);
        }
    }

    public function update(Request $request){
        if(!$data = User::find($request->id)){
            $request->session()->flash('session','Sorry The '.$this->panel.' is not found');
            return redirect()->route($this->base_route);
        }
        
        if ($request->has('profile_images')) {
            $file_name = $this->panel.'' . time() . rand(0, 999999) . $request->file('profile_images')->getClientOriginalName();
            $folder_path = public_path(). DIRECTORY_SEPARATOR . 'Images' . DIRECTORY_SEPARATOR . $this->panel . DIRECTORY_SEPARATOR;
            if (!is_dir($folder_path)) {
                $folder = mkdir($folder_path, 0777, true);
            }
            $request->file('image')->move($folder_path,$file_name);
            if($data->image != '' && file_exists(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'User'.DIRECTORY_SEPARATOR.$data->profile_images)){
                unlink(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'User'.DIRECTORY_SEPARATOR.$data->profile_images);
            }
        }
        $data->update(
            [
            'email' => $request->email,
            'password' =>isset($request->password) ? bcrypt($request->password): $data->password,
            'first_name' => $request->first_name,
            'profile_images' => isset($file_name) ? $file_name : $data->profile_images,
            'last_name' => $request->last_name,
            'role_id' => $request->role_id,
            'status' => $request->status,
        ]);
        $request->session()->flash('session','Success The '.$this->panel.'  Info Updated');
        return redirect()->route($this->base_route);     
    }

    public function delete(Request $request,$id){
        if($user = User::find($id)){
            $user->delete();
        }else{
            $request->session()->flash('session','Success The '.$this->panel.'  Info Updated found');
            return redirect()->route($this-base_route);
        }
    }
}
