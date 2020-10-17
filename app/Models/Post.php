<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'body',
        'likes'
    ];

    public function getPosts(){



    }

//    public function getPosts(){
//
//        return Post::all(); // აბრუნებს ყველა პოსტს
//    }
//
//    public function getFirsPost(){
//        $firstPost = Post::all(); // ამ ცვლადში მოგვაქვს ყველა პოსტი რაც კი ბაზაში არსებობს
//        // ლარაველი მოდელებიდან (Post) უყურებს ბაზაში არსებულ Tables სახელის შესაბამისად ანუ (posts) და ხვდება რომ ეს არის Post.
//        // დაბრუნებისას კი ვაკონკრეტებთ რომ გვინდა პირველი (სხვაშემთხვევაში გამოაქ ყველა)
//        return $firstPost->first()->title; // გამოაქვს პირველი პოსტის სათაური
//
//    }
}
