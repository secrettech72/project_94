<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Http\Requests\Admin\Advertisement\AddFormValidation;
use App\Http\Requests\Admin\Advertisement\EditFormValidation;

class AdvertisementController extends Controller
{
   protected $base_route = 'admin.advertisement';
   protected $panel = 'Advertisement';
    public function index(){
        $data['rows'] = Advertisement::all();
        return view($this->base_route.'.index',compact('data'));
    }

    public function create(){
        return view($this->base_route.'.add',compact(['panel'=>$this->panel]));
    }
    public function store(AddFormValidation $request){
        if ($request->has('ads_images')) {
            $file_name = $this->panel.'' . time() . rand(0, 999999) . $request->file('ads_images')->getClientOriginalName();
            $folder_path = public_path(). DIRECTORY_SEPARATOR . 'Images' . DIRECTORY_SEPARATOR . $this->panel . DIRECTORY_SEPARATOR;
            if (!is_dir($folder_path)) {
                $folder = mkdir($folder_path, 0777, true);
            }
            $request->file('ads_images')->move($folder_path,$file_name);
        }
        Advertisement::create([
            'title' => $request->title,
            'published_date' => $request->published_date,
            'un_published_date' => $request->un_published_date,
            'ads_images' =>isset($file_name) ?$file_name :null,
            'view_count' => 0,
            'status' => $request->status,
        ]);
        $request->session()->flash('session','Success The '.$this->panel.' Has Been Added Successfully');
        return redirect()->route($this->base_route);
    }

    public function edit(Request $request,$id){
        if($data['row'] = Advertisement::find($id)){
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

    public function update(EditFormValidation $request){
        if(!$data = Advertisement::find($request->id)){
            $request->session()->flash('session','Sorry The '.$this->panel.' is not found');
            return redirect()->route($this->base_route);
        }
        
        if ($request->has('ads_images')) {
            $file_name = $this->panel.'' . time() . rand(0, 999999) . $request->file('ads_images')->getClientOriginalName();
            $folder_path = public_path(). DIRECTORY_SEPARATOR . 'Images' . DIRECTORY_SEPARATOR . $this->panel . DIRECTORY_SEPARATOR;
            if (!is_dir($folder_path)) {
                $folder = mkdir($folder_path, 0777, true);
            }
            $request->file('ads_images')->move($folder_path,$file_name);
            if($data->ads_images != '' && file_exists(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Advertisement'.DIRECTORY_SEPARATOR.$data->ads_images)){
                unlink(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Advertisement'.DIRECTORY_SEPARATOR.$data->ads_images);
            }
        }
        $data->update(
            [
                'alt_text' => $request->alt_text,
                'link' => $request->link,
                'ads_images' =>isset($file_name) ?$file_name :$data->ads_images,
                'caption' => $request->caption,
                'status' => $request->status,
        ]);
        $request->session()->flash('session','Success The '.$this->panel.'  Info Updated');
        return redirect()->route($this->base_route);        
    }

    public function delete(Request $request,$id){
        if(!$data = Advertisement::find($request->id)){
            $request->session()->flash('session','Sorry The '.$this->panel.' is not found');
            return redirect()->route($this->base_route);
        }
        if($request->token == substr(sha1('banner_delete'.$id),1,15)){
            if($data->ads_images !=='' && file_exists(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Advertisement'.DIRECTORY_SEPARATOR.$data->ads_images)){
                unlink(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Advertisement'.DIRECTORY_SEPARATOR.$data->ads_images);
            }
            $data->destroy($data->id);
            $request->session()->flash('session','Success The '.$this->panel.' is Deleted');
            return redirect()->route($this->base_route);
        }

    }
}
