<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        //dd($request);
        //Log::debug("retorno do request: " . $this);
         return [
            'id'   => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'role_id' => $this->roles,
            'roles' => $this->roles,
            'created_at' => $this->created_at->toDateString(),
            
        ];
    }
}
