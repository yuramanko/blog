<?php

namespace App\Services;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;

class PostService
{
    public function createPost(int $userId, array $data): Post
    {
        $post = new Post($data);
        $post->user_id = $userId;
        $post->save();
        return $post;
    }

}
