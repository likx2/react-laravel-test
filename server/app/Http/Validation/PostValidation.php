<?php

namespace App\Http\Validation;

use App\Models\Post;
use App\Models\User;
use \Illuminate\Http\Request;

trait PostValidation
{
    public function validateContentOfPost(Request $request)
    {
//        Basic validation
        $request->validate([
            'title' => 'required|min:2|max:20',
            'content' => 'required|min:10|max:100'
        ]);
    }

    /**
     * @throws \Exception
     */
    public function validateAuthorId($authorId)
    {
//        If author with provided id doest exist
        if (User::query()->where(User::ID_COLUMN, '=', $authorId)->doesntExist()) {
            throw new \Exception('User not found in database');
        }
    }
}
