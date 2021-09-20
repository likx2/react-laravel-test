<?php

namespace App\Resources;

class PostResourceCollection extends \Illuminate\Http\Resources\Json\ResourceCollection
{
    public $collects = PostResourse::class;

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
