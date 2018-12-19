<?php

use App\Post;
use App\PostTag;
use App\Tag;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Creating fake accounts');

//        $post_g = factory(Post::class)->create();

        $user = factory(User::class, 1)->create();
            foreach ($user as $use) :
                $posts = factory(Post::class, 10)->create(['user_id' => $use->id]);
                $tags = factory(Tag::class, 5)->create();
                foreach ($posts as $post)
                {

                    foreach ($tags as $tag)
                    {
                        $post_tag = factory(PostTag::class)->create(['post_id' => $post->id, 'tag_id' => $tag->id]);
                    }

                }
            endforeach;



//        factory(User::class, 1)
//            ->create()
//            ->each(function($user){
//                $user->posts()->saveMany(factory(Post::class, 10)
//                    ->create(['user_id' => $user->id])
//                    ->each(function($post){
//                        $post->tag()->saveMany(factory(Tag::class, 5)->create()
//                            ->each(function($tag) {
//                                dd($tag->post);
//                                $tag->post_tag()->save(factory(PostTag::class)->make(['post_id' => $tag->post->id, 'tag_id' => $tag->id]));
//                            }));
//                    }));
//            });
    }
}

