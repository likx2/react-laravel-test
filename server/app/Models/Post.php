<?php

namespace App\Models;

class Post extends \Illuminate\Database\Eloquent\Model
{
    const ID_COLUMN = 'id';
    const TITLE_COLUMN = 'title';
    const CONTENT_COLUMN = 'content';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const AUTHOR_ID = 'author_id';

    const TABLE_NAME = 'posts';
    const AUTHOR_RELATION = 'author';

    protected $table = self::TABLE_NAME;

//Getters

    public function getId()
    {
        return $this->getKey();
    }

    public function getTitle()
    {
        return $this->getAttribute(self::TITLE_COLUMN);
    }

    public function getContent()
    {
        return $this->getAttribute(self::CONTENT_COLUMN);
    }

    public function getCreatedAt()
    {
        return $this->getAttribute(self::CREATED_AT);
    }

    public function getUpdatedAt()
    {
        return $this->getAttribute(self::UPDATED_AT);
    }

    public function getAuthorId()
    {
        return $this->getAttribute(self::AUTHOR_ID);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, self::AUTHOR_ID, User::ID_COLUMN);
    }
}

