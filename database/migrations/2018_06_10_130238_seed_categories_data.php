<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $albums = [
            [
                'name'          => 'Anniversary',
                'description'   => 'Anniversary',
            ],
            [
                'name'          => 'Birthday',
                'description'   => 'Birthday',
            ],
            [
                'name'          => 'Family Group',
                'description'   => 'Family Group',
            ],
            [
                'name'          => 'Family Member',
                'description'   => 'Family Member',
            ],
            [
                'name'          => 'Friends',
                'description'   => 'Friends',
            ],
            [
                'name'          => 'Holidays',
                'description'   => 'Holidays',
            ],
            [
                'name'          => 'House',
                'description'   => 'House',
            ],
            [
                'name'          => 'Pet',
                'description'   => 'Pet',
            ],
            [
                'name'          => 'Place',
                'description'   => 'Place',
            ],
            [
                'name'          => 'Special Events',
                'description'   => 'Special Events',
            ],
            [
                'name'          => 'Wedding',
                'description'   => 'Wedding',
            ],
            [
                'name'          => 'Work',
                'description'   => 'Work',
            ],
            [
                'name'          => 'Work Mate',
                'description'   => 'Work Mate',
            ],
            [
                'name'          => 'Others',
                'description'   => 'Others',
            ],
        ];

        DB::table('categories')->insert($albums);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
