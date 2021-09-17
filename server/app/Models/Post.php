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

    const AUTHOR_RELATIONS = 'users';
    const TABLE_NAME = 'posts';

    protected $table = self::TABLE_NAME;

    public function author()
    {
        $this->belongsTo(User::class,self::AUTHOR_ID,User::ID_COLUMN);
    }
}

