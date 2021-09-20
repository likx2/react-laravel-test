<?php

namespace App\Resources;

use App\Models\User;

class UserResourceCollection extends \Illuminate\Http\Resources\Json\ResourceCollection
{
    public $collects = User::class;

    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
        ];
    }
}
