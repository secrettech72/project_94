<?php

namespace App\Http\Resources;

use App\StudentDetail;
use App\TeacherDetail;
use App\Http\Resources\TeacherDetail as TeacherDetailResource;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'role_id' => $this->role_id,
            'password' => $this->password,
            'detail' => $this->when($this->role_id == 2,StudentDetail::find($this->id)),
            'detail' => $this->when($this->role_id == 1, new TeacherDetailResource(User::find($this->id)->teacher_details))
        ];
    }
}
