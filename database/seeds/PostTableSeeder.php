<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = new Post();
        $posts->title = 'Like';
        $posts->content = 'Ihgdasjdgdkahdskds sdhakhdkadbab asjdhajkdk';
        $posts->save();

        $posts = new Post();
        $posts->title = 'Dislike';
        $posts->content = 'bckjahchak pouor adada';
        $posts->save();
    }
}
