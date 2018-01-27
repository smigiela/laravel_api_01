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
        DB::table('posts')->insert([
        'title' => 'Post1',
        'slug' => 'slug',
        'image' => 'cms.png',
        'alt_tag' => 'alt_tag',
        'category_id' => '1',
        'user_id' => '1',
        'body' => 'lorem ipsum',
        'status' => 'PUBLISHED',
        'meta_description' => 'sdaklsdjkl',
        'keywords' => 'sdklaskld',
    ]);
        DB::table('posts')->insert([
            'title' => 'Post2',
            'slug' => 'slug2',
            'image' => 'cms.png',
            'alt_tag' => 'alt_tag',
            'category_id' => '2',
            'user_id' => '1',
            'body' => 'lorem ipsum',
            'status' => 'PUBLISHED',
            'meta_description' => 'sdaklsdjkl',
            'keywords' => 'sdklaskld',
        ]);
        DB::table('posts')->insert([
            'title' => 'Post3',
            'slug' => 'slug3',
            'image' => 'cms.png',
            'alt_tag' => 'alt_tag',
            'category_id' => '2',
            'user_id' => '1',
            'body' => 'lorem ipsum',
            'status' => 'PUBLISHED',
            'meta_description' => 'sdaklsdjkl',
            'keywords' => 'sdklaskld',
        ]);
    }
}
