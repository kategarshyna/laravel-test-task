<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return new PostResource($post);
    }
}
