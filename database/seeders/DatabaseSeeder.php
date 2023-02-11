<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        User::create([
            'name'=> 'Hadi Purnomo',
            'username' => 'hadi',
            'email' => 'hadi@gmail.com',
            'password' => bcrypt('password')
        ]);
        
        User::factory(3)->create();

        Post::factory(15)->create();

        

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-prograaming'
        ]);

        Category::create([
            'name' => 'Backend Developer',
            'slug' => 'backend-developer'
        ]);

        Category::create([
            'name' => 'Pentester',
            'slug' => 'pentester'
        ]);

        // Post::create([
        //     'title' => 'post dua',
        //     'slug' => 'post-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam enim aliquid vel nostrum sunt fugit voluptates similique, iure libero animi, porro accusamus. Debitis nobis, odio libero aut consequatur cupiditate. Veritatis deleniti repellendus labore quam, fugit amet ab velit autem perferendis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
    }
}
