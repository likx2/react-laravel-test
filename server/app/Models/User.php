<?php

namespace App\Models;

class User extends \Illuminate\Database\Eloquent\Model
{
    const ID_COLUMN = 'id';
    const FIRST_NAME_COLUMN = 'firstName';
    const LAST_NAME_COLUMN = 'lastName';

    const TABLE_NAME = 'users';
    const POSTS_RELATION = 'posts';

    protected $table = self::TABLE_NAME;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
       return $this->hasMany(Post::class, Post::AUTHOR_ID, self::ID_COLUMN);
    }
}
