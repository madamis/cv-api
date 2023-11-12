<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $start = Carbon::parse($this->start_date);
        $end = Carbon::parse($this->end_date);
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'link'=>$this->link,
            'description'=>$this->description,
//            'started'=>$this->Castart_date->format('d/m/Y'),
            'life'=> $start->diffInDays($end, false),
        ];
    }
}
