<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
//    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
        // TODO: Change the autogenerated stub
    }

    /** @test */
    public function can_index_fail_on_non_existing_author_id()
    {
        $post = factory(Post::class)->create([
            Post::AUTHOR_ID => 1
        ]);
        $this->assertNull(User::find(1));
        $response = $this->get('/posts/1');
        $status = $response->getStatusCode();
        $this->assertNotEquals(200, $status);
    }

    /** @test */
    public function can_index_return_posts_by_existing_author_id()
    {
        $post = factory(Post::class)->create([
            Post::AUTHOR_ID => 1
        ]);
        $author = factory(User::class)->create([
            User::ID_COLUMN => 1,
        ]);
        $response = $this->get('/posts/1');
//        $response->assertStatus(200);
        $content = json_decode($response->getContent(), true)['data'];
        dd($content);
    }

    public function can_index_return_posts_by_existing_author_id_with_conditional_realtion_loading()
    {
        $post = factory(Post::class)->create([
            Post::AUTHOR_ID => 1
        ]);
        $author = factory(User::class)->create([
            User::ID_COLUMN => 1,
        ]);
    }
}
