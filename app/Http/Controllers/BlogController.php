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
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
