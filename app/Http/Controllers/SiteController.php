<?php


namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $recentposts = Post::orderBy('created_at', 'desc')->take(3)->get();
        //dd($recentposts);
        return view ('index',
        ['recentPosts'=>$recentposts]
    );

    }

    public function post($slug)
    {
        $post = Post::where('slug')->first();
        if(!$post){
                abort(404);
        }
        return view('post',
        ['post'=> $post]
         );
    }

    public function post_index (){
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);

        return view('post_index',
      ['posts' => $posts]  
    );

    }
}
