<?php

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotosTableSeeder extends Seeder
{
    public function run()
    {
        $photos = factory(Photo::class)->times(50)->make()->each(function ($photo, $index) {
            if ($index == 0) {
                // $photo->field = 'value';
            }
        });

        Photo::insert($photos->toArray());
    }

}

