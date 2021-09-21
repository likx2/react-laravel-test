<?php

namespace App\Http\Controllers;

use App\Http\Validation\PostValidation;
use App\Models\Post;
use App\Models\User;
use App\Resources\PostResourceCollection;
use App\Resources\PostResourse;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


class PostController extends \Illuminate\Routing\Controller
{
    use PostValidation;

    /**
     * @param Request $request
     * @return PostResourse
     * @throws \Exception
     */
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

    /**
     * @param $authorId
     * @return PostResourceCollection
     */
    public function index($authorId)
    {
        $this->validateAuthorId($authorId);
        $retrievedPostsByAythor = Post::query()
            ->where(Post::AUTHOR_ID, $authorId)
            ->with([Post::AUTHOR_RELATION =>
                function ($authorQuery) {
                    $authorQuery->where(User::FIRST_NAME_COLUMN, '=', 'Ahmed');
                }])
            ->get();

        return new PostResourceCollection($retrievedPostsByAythor);
    }

    /**
     * @param Request $request
     * @param $postId
     * @return PostResourse
     */
    public function update(Request $request, $postId)
    {
        $this->validateContentOfPost($request);
        $postToBeUpdated = Post::findOrFail($postId);
        $postToBeUpdated->{Post::TITLE_COLUMN} = $request->get(Post::TITLE_COLUMN);
        $postToBeUpdated->{Post::CONTENT_COLUMN} = $request->get(Post::CONTENT_COLUMN);
        $postToBeUpdated->save();

        return new PostResourse($postToBeUpdated);
    }
}
