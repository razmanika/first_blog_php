<?php

namespace App\Http\Controllers;

use App\Models\Post; // იმისათვის რომ უშუალოდ პოსტის მოდულთან ჰქონდეს კავშირი.
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = new Post(); // იქმნება ობიექტი პოსტის მოდულისთვის (კლასისთვის)

        return $posts->getFirsPost(); // გამოაქვს პირველი პოსტი
    }
}
