<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function getPosts(){

        return Post::all(); // აბრუნებს ყველა პოსტს
    }

    public function getFirsPost(){
        $firstPost = Post::all(); // ამ ცვლადში მოგვაქვს ყველა პოსტი რაც კი ბაზაში არსებობს
        // დაბრუნებისას კი ვაკონკრეტებთ რომ გვინდა პირველი (სხვაშემთხვევაში გამოაქ ყველა)
        return $firstPost->first()->title; // გამოაქვს პირველი პოსტის სათაური

    }
}
