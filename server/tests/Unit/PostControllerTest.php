<?php

use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostControllerTest extends TestCase
{
    /** @test */
    public function can_show_return_posts_by_specific_athor_id()
    {
        $posts = factory(Post::class, 3)->create([
            Post::AUTHOR_ID => 1
        ]);


    }
}
