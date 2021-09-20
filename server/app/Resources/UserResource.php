<?php

namespace App\Resources;

use App\Models\User;

class UserResource extends \Illuminate\Http\Resources\Json\JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            User::ID_COLUMN => $this->id,
            User::FIRST_NAME_COLUMN => $this->firstName,
            User::LAST_NAME_COLUMN => $this->lastName,
            User::CREATED_AT => $this->created_at,
            User::UPDATED_AT => $this->updated_at,
        ];
    }
}
