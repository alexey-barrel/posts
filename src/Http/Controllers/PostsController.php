<?php

namespace Alexey\Posts\Http\Controllers;

use Alexey\Posts\Models\Posts1;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    
    public function index()
    {
        Posts1::create([ 'title' => 'posts']);
        $posts = Posts1::all();
        return view('posts::index', [ 'posts' => $posts]);

    }
    
    
}
