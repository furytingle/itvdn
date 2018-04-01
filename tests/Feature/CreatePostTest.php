<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreatePostTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(User::class)->create();

        $title = 'My new awesome post';

        $response = $this->actingAs($user)
            ->withSession([])
            ->post('/post', [
                'title' => $title,
                'body' => 'This is very exciting test'
            ]);

        $response->assertStatus(302);

        $response = $this->actingAs($user)
            ->withSession([])
            ->get('/post');

        $response->assertSee($title);
        $response->assertSee('Create');
    }
}
