<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

use App\Models\Picture;

class PictureControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_shows_dogs()
    {
        Picture::create([
            'name' => 'test name',
            'file_path' => 'dog.jpg',
        ]);

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('test name');
        $response->assertSee('0 votes');
    }

    public function test_homepage_shows_dogs_with_votes()
    {
        $dog = Picture::create([
            'name' => 'test name',
            'file_path' => 'dog.jpg',
        ]);
        $dog->votes = 10;
        $dog->save();

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('test name');
        $response->assertSee('10 votes');
    }

    public function test_upload_adds_new_dog()
    {
        $file = UploadedFile::fake()->image('dog.jpg');

        $response = $this->post('/pictures', [
            'image' => $file,
            'name' => 'Lassie'
        ]);
        
        $response->assertStatus(302);
        $response->assertRedirect('/');

        $this->assertDatabaseHas('pictures', [
            'name' => 'Lassie',
            'file_path' => $file->hashName(),
        ]);

        $this->assertFileExists(storage_path('app/public/' . $file->hashName()));
    }

    // public function test_upvote_a_dog()
    // {

    // }
}