<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    protected $fillable = ['image','alt_text','caption','link','status'];

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
