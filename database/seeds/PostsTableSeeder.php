<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        //

        Post::truncate();

        factory('App\Post', 15)->create();
    }
}
