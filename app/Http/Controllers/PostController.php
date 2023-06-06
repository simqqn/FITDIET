<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index',
        
            ['posts' => $posts]
        
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post($request->all());
        //dd($post);

        $ext = $request->file('thumbnail')->extension();
        $file_name = hash('sha256', time()).".".$ext;
        $request->file('thumbnail')->move(public_path('uploads/'),$file_name);
        $post->thumbnail = $file_name;

        $post->slug = Str::slug($request->title);
        $post->save();

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit',
        
        ['post' => $post]
    );
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->fill($request->all());

        if($request->hasFile('thumbnail')) {
            if(file_exists(public_path('uploads/'.$post->thumbnail))){
                unlink((public_path('uploads/'.$post->thumbnail)));
            }

        
        $ext = $request->file('thumbnail')->extension();
        $file_name = hash('sha256', time()).".".$ext;
        $request->file('thumbnail')->move(public_path('uploads/'),$file_name);
        $post->thumbnail = $file_name;
        }
        $post->slug = Str::slug($request->title);
        $post->save();

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
