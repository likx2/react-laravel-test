<?php

namespace App\Resources;

use App\Models\Post;

/**
 * @mixin Post
 */
class PostResourse extends \Illuminate\Http\Resources\Json\JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            Post::ID_COLUMN => $this->getId(),
            Post::AUTHOR_ID=> $this->getAuthorId(),
            Post::TITLE_COLUMN => $this->getTitle(),
            Post::CONTENT_COLUMN => $this->getContent(),
            Post::CREATED_AT => $this->getCreatedAt(),
            Post::UPDATED_AT => $this->getUpdatedAt(),
            Post::AUTHOR_RELATION=> $this->whenLoaded(Post::AUTHOR_RELATION)
        ];
    }
}
