<?php

namespace App\Http\Controllers;

use App\Http\Repositories\Interfaces\PostsRepositoryInterface;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(PostsRepositoryInterface $postsRepo) {
        $posts=$postsRepo->get();
//        dd($posts,Post::published()->take(10));
        return view('welcome',compact('posts'));
    }
    public function get() {
        return view('welcome');
    }
}//End of Class
