<?php

namespace App\Http\Controllers;

use App\Http\Validation\PostValidation;
use App\Models\Post;
use App\Resources\PostResourse;
use Illuminate\Http\Request;


class PostController extends \Illuminate\Routing\Controller
{
    use PostValidation;
    public function store(Request $request)
    {
        $this->validateAuthorId($request->{Post::AUTHOR_ID});
        $this->validateContentOfPost($request);
        $post = new Post();
        $post->{Post::AUTHOR_ID} = $request->get(Post::AUTHOR_ID);
        $post->{Post::TITLE_COLUMN} = $request->get(Post::TITLE_COLUMN);
        $post->{Post::CONTENT_COLUMN} = $request->get(Post::CONTENT_COLUMN);
        $post->save();

        return new PostResourse($post);
    }
    //add validation (post must be with existed user in db)
    // get all posts by author
    //patch existed post
}
