<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherDetail extends JsonResource
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
            'avatar' => $this->avatar,
            'address' => $this->address,
            'phone' => $this->phone_number,
            'bio' => $this->bio,
            'qualification' => $this->qualification,
            'experience' => $this->experience,
            'social' => [
                'facebook' => $this->facebook,
                'twitter' => $this->twitter
            ]
        ];
    }
}
