<?php

namespace App\Models;

class User extends \Illuminate\Database\Eloquent\Model
{
    const ID_COLUMN = 'id';
    const FIRST_NAME_COLUMN = 'firstName';
    const LAST_NAME_COLUMN = 'lastName';

    const POSTS_RELATION = 'posts';
    const TABLE_NAME = 'users';

    protected $table = self::TABLE_NAME;

    public function posts()
    {
        $this->hasMany(Post::class, Post::AUTHOR_ID, self::ID_COLUMN);
    }

}
