<?php

namespace Tests\Unit\Models;

use App\Models\User;
use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_belongs_to_user()
    {
        $image = Image::factory()->create();

        $this->assertInstanceOf(User::class, $image->user);

    }
}
