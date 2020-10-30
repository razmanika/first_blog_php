<?php

namespace App\Http\Controllers;

use App\Models\Post; // იმისათვის რომ უშუალოდ პოსტის მოდულთან ჰქონდეს კავშირი.
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class PostController extends Controller
{
    public function index(){

        //get info from database;
        $posts = Post::all();


        return view('posts')->with('posts', $posts);
        //pass the info to view
    }


    public function show(Post $post){ // url-იდან წამოსული აიდი.
        //get post with id of requested id
//        $post = Post::findOrfail($id); // ეძებს პოსტებს გადაცემული აიდის მიხედვით,
        // ამშემთხვევაში იუერელში რა აიდსაც ჩავწერთ, თუ ვერ იპოვა (404ერორ)

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


    public function edit(Post $post){

//        $post = Post::findOrfail($postid); // წამოვიღოთ შესაბამისი აიდის პოსტი,

        return view('edit')->with('post', $post); // და შესაბამისი პოსტს ვაგზავნით html-ში
    }

    public function update(Request $request, Post $post){ // დავიჭიროთ გამოგზავნილი რექვესთი შესაბამისი პოსტის

//        $post = Post::findOrfail($postid); // ანალოგიურად შესაბამისი პოსტი
        $post->update($request->all()); // დატაბაზაში ვააბდეითებთ რექვესთიდან შემოსულ მთლიან ინფოს

        return redirect('/posts'); // და გვაბრუნებს პოსტების გვერძე
    }


    public function delete(Post $post){


        $post->delete();

        return redirect('/posts');
    }
//    public function index(){
//        $posts = new Post(); // იქმნება ობიექტი პოსტის მოდულისთვის (კლასისთვის)
//
//        return $posts->getFirsPost(); // გამოაქვს პირველი პოსტი
//    }
}
