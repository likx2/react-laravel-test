<?php

use App\Models\Post;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    /** @test */
    public function can_index_return_posts_by_existed_athor_id()
    {
        $posts = factory(Post::class, 3)->create([
            Post::AUTHOR_ID => 1
        ]);
        $response = $this->get('/posts/1');
        dd($response);
    }
}
