<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;

class BannerController extends Controller
{
   protected $base_route = 'admin.banner';
   protected $panel = 'Banner';
    public function index(){
        $data['rows'] = Banner::all();
        return view($this->base_route.'.index',compact('data'));
    }

    public function create(){
        return view($this->base_route.'.add',compact(['panel'=>$this->panel]));
    }
    public function store(Request $request){
       
        if ($request->has('image')) {
            $file_name = $this->panel.'' . time() . rand(0, 999999) . $request->file('image')->getClientOriginalName();
            $folder_path = public_path(). DIRECTORY_SEPARATOR . 'Images' . DIRECTORY_SEPARATOR . $this->panel . DIRECTORY_SEPARATOR;
            if (!is_dir($folder_path)) {
                $folder = mkdir($folder_path, 0777, true);
            }
            $request->file('image')->move($folder_path,$file_name);
        }
        $panel = 'Banner';
        Banner::create([
            'alt_text' => $request->alt_text,
            'link' => $request->link,
            'image' =>isset($file_name) ?$file_name :null,
            'caption' => $request->caption,
            'status' => $request->status,
        ]);
        $request->session()->flash('session','Success The '.$this->panel.' Has Been Added Successfully');
        return redirect()->route($this->base_route);
    }

    public function edit(Request $request,$id){
        if($data['row'] = Banner::find($id)){
            if($request->token == substr(sha1('banner_edit'.$id),1,15)){
            return view($this->base_route.'.edit',compact('data'));
            }else{
                $request->session()->flash('session','Sorry Token Mismatched You Have No Authorized Accesss');
                return redirect()->back();
            }
        }else{
            $request->session()->flash('session','Sorry The '.$this->panel.' is not found');
            return redirect()->route($this->base_route);
        }
    }

    public function update(Request $request){
        if(!$data = Banner::find($request->id)){
            $request->session()->flash('session','Sorry The '.$this->panel.' is not found');
            return redirect()->route($this->base_route);
        }
        
        if ($request->has('image')) {
            $file_name = $this->panel.'' . time() . rand(0, 999999) . $request->file('image')->getClientOriginalName();
            $folder_path = public_path(). DIRECTORY_SEPARATOR . 'Images' . DIRECTORY_SEPARATOR . $this->panel . DIRECTORY_SEPARATOR;
            if (!is_dir($folder_path)) {
                $folder = mkdir($folder_path, 0777, true);
            }
            $request->file('image')->move($folder_path,$file_name);
            if($data->image != '' && file_exists(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Banner'.DIRECTORY_SEPARATOR.$data->image)){
                unlink(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Banner'.DIRECTORY_SEPARATOR.$data->image);
            }
        }
        $data->update(
            [
                'alt_text' => $request->alt_text,
                'link' => $request->link,
                'image' =>isset($file_name) ?$file_name :$data->image,
                'caption' => $request->caption,
                'status' => $request->status,
        ]);
        $request->session()->flash('session','Success The '.$this->panel.'  Info Updated');
        return redirect()->route($this->base_route);        
    }

    public function delete(Request $request,$id){
        if(!$data = Banner::find($request->id)){
            $request->session()->flash('session','Sorry The '.$this->panel.' is not found');
            return redirect()->route($this->base_route);
        }
        if($request->token == substr(sha1('banner_delete'.$id),1,15)){
            if($data->image !=='' && file_exists(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Banner'.DIRECTORY_SEPARATOR.$data->image)){
                unlink(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Banner'.DIRECTORY_SEPARATOR.$data->image);
            }
            $data->destroy($data->id);
            $request->session()->flash('session','Success The '.$this->panel.' is Deleted');
            return redirect()->route($this->base_route);
        }

    }
}
