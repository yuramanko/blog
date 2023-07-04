<?php

namespace App\Services;

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

    public function destroyPost($postId)
    {
        Post::destroy($postId);
    }

}
