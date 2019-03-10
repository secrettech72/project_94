<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $table = 'advertisement';
    protected $fillable = ['title','ads_images','published_date','un_published_date','status','view_count'];

    public function setStatusAttribute($value){
        $this->attributes['status'] = $value == 'active' ? 1 : 0;
    }

    public function getStatusAttribute(){
       $value = $this->attributes['status'];
        if($value == 1){
            return 'Active';
        }elseif($value == 0){
            return 'In-active';
        }
        return false;
    }

}
