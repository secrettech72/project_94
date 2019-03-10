<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherDetail extends Model
{
    protected $table = 'teacher_details';
    protected $fillable = [
        "avatar", "address", "phone_number", "bio" ,"qualification",
          "experience" , "facebook" , "twitter", "user_id" ,
      ];
}
