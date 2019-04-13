<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsControllerTest extends TestCase
{
    /**
     * Index endpoint format
     *
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
