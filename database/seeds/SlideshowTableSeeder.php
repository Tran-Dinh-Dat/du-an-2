<?php

use Illuminate\Database\Seeder;

use App\Models\Slideshow;
class SlideshowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Slideshow::create([
            'image_url' => 'sl01.jpg',
            'caption1' => ' ',
            'caption2' => ' ',
        ]);

        Slideshow::create([
            'image_url' => 'sl02.jpg',
            'caption1' => ' ',
            'caption2' => ' ',
        ]);
    }
}
