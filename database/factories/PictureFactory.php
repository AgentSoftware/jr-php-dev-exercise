<?php

namespace Database\Factories;

use App\Models\Picture;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


class PictureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Picture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $response = Http::get('https://dog.ceo/api/breeds/image/random');
        $url = $response->json()['message'];
        $file_path = $this->faker->uuid() . '.jpg';
        Storage::disk('local')->put('public/' . $file_path, file_get_contents($url));

        return [
            'name' => $this->faker->name(),
            'file_path' => $file_path,
            'votes' => 0,
        ];
    }
}
