<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnnualLeaveResource extends JsonResource
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
            'id'          => $this->id,
            'user_ud'     => $this->user_id,
            'from_date'   => $this->from_date,
            'to_date'     => $this->to_date,
            'description' => $this->description,
            'status'      => $this->status
        ];
    }
}
