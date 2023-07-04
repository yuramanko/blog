<?php

namespace App\Services;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;

class PostService
{
    public function createPost(PostStoreRequest $request): Post
    {
        $post = new Post($request->all());
        $post->user_id = auth()->user()->id;
        $post->save();
        return $post;
    }

}
