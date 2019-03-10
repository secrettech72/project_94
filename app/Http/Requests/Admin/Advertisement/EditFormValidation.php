<?php

namespace App\Http\Requests\Admin\Advertisement;

use Illuminate\Foundation\Http\FormRequest;

class EditFormValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->compare_date();
        return [
            'title'=>'required|unique:advertisement,title,'.$this->request->get('id'),
            'published_date'=>'required|date|',
            'un_published_date'=>'required|date|compare_date',
            'status'=>'required'
        ];
    }

    public function compare_date(){
        \Validator::extend('compare_date', function($attribute,$value,$parameters,$validator){
            if($this->request->get('published_date') < $value){
                return true;
            }else{
                return false;
            }
        },'Sorry The UnPublished Date Cannot Be In The Past');
        
    }
}
