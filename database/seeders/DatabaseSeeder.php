<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //      \App\Models\User::factory(10)->create();

    //      \App\Models\User::factory()->create([
    //          'name' => 'Test User',
    //          'email' => 'test@example.com',
    //      ]);


            User::create([
                'name' => 'Fresabayu A',
                'email' => 'fresabayu0601@gmail.com',
                'password' => bcrypt('12345')
            ]);

            User::create([
                'name' => 'ST',
                'email' => 'esteee@gmail.com',
                'password' => bcrypt('12345')
            ]);

            Category::create([
                'name' => 'Web Programming',
                'slug' => 'web-programming'

            ]);
            
            Category::create([
                'name' => 'Web Design',
                'slug' => 'web-design'

            ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal'

            ]);

            Post::create([
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Judul Pertama',
                'slug' => 'judul-pertama',
                'excerpt' => ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate, ratione laudantium fugit tempore ipsa vitae necessitatibus? Vero consectetur reprehenderit cumque.',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui dolorem debitis ab illum atque vero optio voluptas nulla reprehenderit. Molestias provident doloribus eius, fugiat aliquam dolore praesentium magni? Esse temporibus aliquid rem ab veritatis incidunt quas deleniti consequatur architecto beatae, ullam repudiandae necessitatibus pariatur quisquam, iure in dolorum consequuntur laboriosam quidem voluptates ea deserunt vel. Ducimus esse repellendus numquam eligendi! Voluptates voluptas ipsum repellat earum sapiente? Reprehenderit, omnis debitis officia laudantium, perspiciatis accusamus illum soluta fugit impedit, aliquam aperiam eos corrupti architecto ratione quis deserunt dolor quam culpa atque sequi animi iusto in fugiat! Optio, iste. Nihil totam minus deleniti.'
            ]);

            Post::create([
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Judul Kedua',
                'slug' => 'judul-ke-dua',
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate, ratione laudantium fugit tempore ipsa vitae necessitatibus? Vero consectetur reprehenderit cumque.',
               'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui dolorem debitis ab illum atque vero optio voluptas nulla reprehenderit. Molestias provident doloribus eius, fugiat aliquam dolore praesentium magni? Esse temporibus aliquid rem ab veritatis incidunt quas deleniti consequatur architecto beatae, ullam repudiandae necessitatibus pariatur quisquam, iure in dolorum consequuntur laboriosam quidem voluptates ea deserunt vel. Ducimus esse repellendus numquam eligendi! Voluptates voluptas ipsum repellat earum sapiente? Reprehenderit, omnis debitis officia laudantium, perspiciatis accusamus illum soluta fugit impedit, aliquam aperiam eos corrupti architecto ratione quis deserunt dolor quam culpa atque sequi animi iusto in fugiat! Optio, iste. Nihil totam minus deleniti.'
            ]);

            Post::create([
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'Judul Ketiga',
                'slug' => 'judul-ke-tiga',
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate, ratione laudantium fugit tempore ipsa vitae necessitatibus? Vero consectetur reprehenderit cumque.',
                'body' => ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui dolorem debitis ab illum atque vero optio voluptas nulla reprehenderit. Molestias provident doloribus eius, fugiat aliquam dolore praesentium magni? Esse temporibus aliquid rem ab veritatis incidunt quas deleniti consequatur architecto beatae, ullam repudiandae necessitatibus pariatur quisquam, iure in dolorum consequuntur laboriosam quidem voluptates ea deserunt vel. Ducimus esse repellendus numquam eligendi! Voluptates voluptas ipsum repellat earum sapiente? Reprehenderit, omnis debitis officia laudantium, perspiciatis accusamus illum soluta fugit impedit, aliquam aperiam eos corrupti architecto ratione quis deserunt dolor quam culpa atque sequi animi iusto in fugiat! Optio, iste. Nihil totam minus deleniti.'
            ]);

            Post::create([
                'category_id' => 2,
                'user_id' => 2,
                'title' => 'Judul Keempat',
                'slug' => 'judul-ke-empat',
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate, ratione laudantium fugit tempore ipsa vitae necessitatibus? Vero consectetur reprehenderit cumque.',
                'body' => ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui dolorem debitis ab illum atque vero optio voluptas nulla reprehenderit. Molestias provident doloribus eius, fugiat aliquam dolore praesentium magni? Esse temporibus aliquid rem ab veritatis incidunt quas deleniti consequatur architecto beatae, ullam repudiandae necessitatibus pariatur quisquam, iure in dolorum consequuntur laboriosam quidem voluptates ea deserunt vel. Ducimus esse repellendus numquam eligendi! Voluptates voluptas ipsum repellat earum sapiente? Reprehenderit, omnis debitis officia laudantium, perspiciatis accusamus illum soluta fugit impedit, aliquam aperiam eos corrupti architecto ratione quis deserunt dolor quam culpa atque sequi animi iusto in fugiat! Optio, iste. Nihil totam minus deleniti.'
            ]);
    }


}

