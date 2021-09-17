<?php


use App\Models\User;
use Illuminate\Database\Seeder;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = factory(User::class)->create();

        factory(Post::class)->create([
            Post::AUTHOR_ID => $user->{User::ID_COLUMN},
        ]);
    }
}
