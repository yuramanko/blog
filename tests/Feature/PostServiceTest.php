<?php

namespace Tests\Feature;

use App\Models\User;
use App\Services\PostService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class PostServiceTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_create_post(): void
    {
        $user = User::factory()->create();
        $user->password = '1234567890';
        $user->save();

        $data = [
            'title' => 'title',
            'description' => 'description',
        ];

        $post = (new PostService())->createPost($user->id, $data);

        $this->assertModelExists($post);
    }
}
