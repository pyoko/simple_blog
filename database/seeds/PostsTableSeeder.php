<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 35)->create()->each(function ($post) {
            $post->author()->associate($this->getRandomAuthor());
            $post->tags()->attach($this->getRandomTag());
            $post->save();
        });
    }

    // ------------------------------------------------------------------------

    private function getRandomAuthor()
    {
        return App\Author::inRandomOrder()->first();
    }

    private function getRandomTag()
    {
        $faker = \Faker\Factory::create();
        return $faker->randomElements(App\Tag::inRandomOrder()->get()->pluck('id'), $faker->randomElement([1,2,3]));
    }
}