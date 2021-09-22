<?php

namespace App\Models;

class User extends \Illuminate\Database\Eloquent\Model
{
    const ID_COLUMN = 'id';
    const FIRST_NAME_COLUMN = 'firstName';
    const LAST_NAME_COLUMN = 'lastName';
    const COUNTRY_ID = 'country_id';

    const TABLE_NAME = 'users';
    const POSTS_RELATION = 'posts';
    const COUNTRY_RELATION = 'country';

    protected $table = self::TABLE_NAME;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Post::class, Post::AUTHOR_ID, self::ID_COLUMN);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Country::class, self::COUNTRY_RELATION, Country::ID_COLUMN);
    }
}
