<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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


    public static function all() 
    {
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        $posts = static::all();
        
        // $posts = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $posts = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
