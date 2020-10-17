<?php

namespace App\Http\Controllers;

use App\Models\Post; // იმისათვის რომ უშუალოდ პოსტის მოდულთან ჰქონდეს კავშირი.
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

        //get info from database;
        $posts = Post::all();




        return view('posts')->with('posts', $posts);
        //pass the info to view
    }


    public function show($id){ // url-იდან წამოსული აიდი.
        //get post with id of requested id
        $post = Post::findOrfail($id); // ეძებს პოსტებს გადაცემული აიდის მიხედვით, ამშემთხვევაში იუერელში რა აიდსაც ჩავწერთ

        return view('post')->with('post', $post);

    }


    public function create(){

        return view('create');
    }


    public function save(Request $request){

        $post = new Post($request->all());

        $post->save();

        return redirect()->back();

    }

//    public function index(){
//        $posts = new Post(); // იქმნება ობიექტი პოსტის მოდულისთვის (კლასისთვის)
//
//        return $posts->getFirsPost(); // გამოაქვს პირველი პოსტი
//    }
}
