<?php

use Illuminate\Database\Seeder;
use App\Models\Photo;
use App\Models\User;
use App\Models\Category;

class PhotosTableSeeder extends Seeder
{
    public function run()
    {
        // $photos = factory(Photo::class)->times(50)->make()->each(function ($photo, $index) {
        //     if ($index == 0) {
        //         // $photo->field = 'value';
        //     }
        // });

        // Photo::insert($photos->toArray());

        // 所有用户 ID 数组，如：[1,2,3,4]
        $user_ids = User::all()->pluck('id')->toArray();

        // 所有分类 ID 数组，如：[1,2,3,4]
        $category_ids = Category::all()->pluck('id')->toArray();

        // fetch Faker instance
        $faker = app(Faker\Generator::class);

        $photos = factory(Photo::class)
                        ->times(100)
                        ->make()
                        ->each(function ($photo, $index)
                            use ($user_ids, $category_ids, $faker)
        {
            // 从用户 ID 数组中随机取出一个并赋值
            $photo->user_id = $faker->randomElement($user_ids);

            // 话题分类，同上
            $photo->category_id = $faker->randomElement($category_ids);
        });

        // 将数据集合转换为数组，并插入到数据库中
        Photo::insert($photos->toArray());
    }

}

