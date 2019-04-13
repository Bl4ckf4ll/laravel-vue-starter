<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Return a collection of posts
     *
     * @return PostCollection
     */
    public function index()
    {
        return new PostCollection(Post::paginate());
    }
}
