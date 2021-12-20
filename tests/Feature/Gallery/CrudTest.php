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

        Image::factory(4)->create();

        $response = $this->get('home');

        $response->assertOk();

        Image::all();
        
        $response->assertStatus(200)
            ->assertViewIs('home');

    }

    public function test_a_post_can_be_retrieved()
    {
        $this->withoutExceptionHandling();

        $image = Image::factory(4)->create();

        $images = $image[1];

        $response = $this->get(route('show', $images->id));

        $response->assertViewIs('show');

    }

    public function test_a_post_can_be_created()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/images', 
        [
            'image' => 'test image',
            'title' => 'test title'
        ]);

        $this->assertCount(1, Image::all());

        $data = Image::first();

        $this->assertEquals($data->image, 'test image');
        $this->assertEquals($data->title, 'test title');

        $response->assertRedirect('/images/' . $data->id);

    }
}
