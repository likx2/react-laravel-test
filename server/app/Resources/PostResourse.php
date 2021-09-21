<?php

namespace App\Resources;

use App\Models\Post;
use Illuminate\Http\Resources\MissingValue;

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
            Post::AUTHOR_ID => $this->getAuthorId(),
            Post::TITLE_COLUMN => $this->getTitle(),
            Post::CONTENT_COLUMN => $this->getContent(),
            Post::CREATED_AT => $this->getCreatedAt(),
            Post::UPDATED_AT => $this->getUpdatedAt(),
            Post::AUTHOR_RELATION => $this->getAuthor(),
        ];
    }

    protected function getAuthor()
    {
        $author = $this->whenLoaded(Post::AUTHOR_RELATION);
        return $author?:new MissingValue();
    }
}
