<?php

namespace App\Http\Resources;

use App\Http\Resources\User as UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Status extends JsonResource
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
            'created_at' => $this->created_at->diffForHumans(),
            'id' => $this->id,
            'text' => $this->text,
            'user' => new UserResource($this->user)
        ];
    }
}
