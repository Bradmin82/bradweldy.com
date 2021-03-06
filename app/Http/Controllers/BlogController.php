<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBlogHome()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5); 
        //$posts = Post::orderBy('created_at', 'desc')->limit(6)->get();
        
        return view('blog.index')->withPosts($posts);
        //return redirect()->route('blog.index')->withPosts($posts);
    }

    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('blog.index')->withPosts($posts);
        // return redirect()->route('blog.index')->withPosts($posts);
        // return redirect()->route('blog.home')->withPosts($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function getSingle($slug)
    {
        // fetch from the DB based on slug
        $post = Post::where('slug', '=', $slug)->first();

        //  return the view and pass in the post object
        return view('blog.single')->withPost($post);

    }


}
