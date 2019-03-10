<?php

namespace App\Http\Requests\Admin\Advertisement;

use Illuminate\Foundation\Http\FormRequest;

class AddFormValidation extends FormRequest
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

     public function messages(){
         return [
             'compare_date'=>'Sorry The UnPublished Date Cannot Be In The Past',
         ];
     }
    
    public function rules()
    {
        $this->customValidation();
        return [
            'published_date'=>'required|date',
            'un_published_date'=>'required|date|compare_date',
        ];
    }
    public function customValidation(){
        \Validator::extend('compare_date',function($attribute,$value,$parameters,$validator){ //Custom Validation on laravel 
            if($this->request->get('published_date') <= $value){
                return true;
            }
            return false;
        });
    }
}
