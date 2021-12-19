<?php

namespace Tests\Feature\Gallery;

use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_list_of_posts_can_be_retrieved()
    {
        $this->withoutExceptionHandling();

        Image::all();

        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('home');

    }
    public function test_a_post_can_be_created()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/images', 
        [
            'image' => 'test image',
            'title' => 'test title'
        ]);

        $response->assertOk();
        $this->assertCount(1, Image::all());

        $post = Image::first();

        $this->assertEquals($post->image, 'test image');
        $this->assertEquals($post->title, 'test title');



    }
}
