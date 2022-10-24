<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"

    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Fresabayu Anggoro",
        "email" => "fresabayu0601@gmail.com",
        "image" => "gon2.png"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Prof Fresa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aspernatur nostrum et nam consectetur architecto asperiores, 
            facere nisi rerum tempora quibusdam, numquam omnis eveniet labore repellendus recusandae beatae pariatur!
            Facilis nobis, molestiae culpa eligendi libero commodi laboriosam, temporibus, animi neque earum quia maiores eius vel quo sunt.
            Blanditiis earum nemo distinctio quasi aut perspiciatis impedit quam incidunt sed,
            recusandae porro quos numquam repudiandae doloremque error eaque itaque quia reiciendis non ullam cupiditate rerum accusantium praesentium eos.
            Inventore nostrum ipsa praesentium dignissimos!."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Prof Anggoro",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Porro voluptates suscipit minima molestias quasi architecto nostrum aperiam ipsam velit corporis maiores eum veritatis, 
            laborum repudiandae soluta placeat, necessitatibus non vitae molestiae. 
            Natus eveniet doloribus laboriosam necessitatibus architecto, neque laborum eum eos molestias blanditiis aperiam provident perferendis minima omnis aut optio sint sequi ratione quis nesciunt,harum ducimus.
            Dolorem laborum odit esse vel modi? Repellat harum aperiam nemo reprehenderit, consectetur alias facilis sequi commodi adipisci, ut dicta totam necessitatibus, neque excepturi itaque.
            Quae corporis facere perspiciatis voluptatum quibusdam incidunt, explicabo tempora quam similique iusto ad.
            Pariatur recusandae praesentium perferendis non cum?."
        ],
    ];

    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});



// Halaman Single Route
Route::get('posts/{slug}', function($slug){

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Prof Fresa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aspernatur nostrum et nam consectetur architecto asperiores, 
            facere nisi rerum tempora quibusdam, numquam omnis eveniet labore repellendus recusandae beatae pariatur!
            Facilis nobis, molestiae culpa eligendi libero commodi laboriosam, temporibus, animi neque earum quia maiores eius vel quo sunt.
            Blanditiis earum nemo distinctio quasi aut perspiciatis impedit quam incidunt sed,
            recusandae porro quos numquam repudiandae doloremque error eaque itaque quia reiciendis non ullam cupiditate rerum accusantium praesentium eos.
            Inventore nostrum ipsa praesentium dignissimos!."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Prof Anggoro",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Porro voluptates suscipit minima molestias quasi architecto nostrum aperiam ipsam velit corporis maiores eum veritatis, 
            laborum repudiandae soluta placeat, necessitatibus non vitae molestiae. 
            Natus eveniet doloribus laboriosam necessitatibus architecto, neque laborum eum eos molestias blanditiis aperiam provident perferendis minima omnis aut optio sint sequi ratione quis nesciunt,harum ducimus.
            Dolorem laborum odit esse vel modi? Repellat harum aperiam nemo reprehenderit, consectetur alias facilis sequi commodi adipisci, ut dicta totam necessitatibus, neque excepturi itaque.
            Quae corporis facere perspiciatis voluptatum quibusdam incidunt, explicabo tempora quam similique iusto ad.
            Pariatur recusandae praesentium perferendis non cum?."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }


   return view('post', [
        "title" => "Single Post",
        "post"  => $new_post
   ]); 
});