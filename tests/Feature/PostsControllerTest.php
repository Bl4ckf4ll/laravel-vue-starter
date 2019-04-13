<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsControllerTest extends TestCase
{
    /**
     * @test
     */
    public function indexShouldReturnPostsListWithFormat()
    {
        $response = $this->json('GET', 'api/posts');

        $response->assertJsonStructure([
            'data',
            'links',
            'meta',
        ]);
    }
}
