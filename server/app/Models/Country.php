<?php

namespace App\Models;

class Country extends \Illuminate\Database\Eloquent\Model
{
    const ID_COLUMN ='id';
    const COUNTRY_NAME_COLUMN = 'country_name';
    const USERS_RELATION = 'users';
    const TABLE_NAME = 'countries';

    protected $table= self::TABLE_NAME;
//    public function posts()
//    {
//        return $this->hasMany(Post::class,Post::COUNTRY_ID,self::ID_COLUMN);
//    }

}
