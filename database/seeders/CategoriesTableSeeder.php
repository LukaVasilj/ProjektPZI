<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Shooter Games',
                'slug' => 'Shooter',
                'description' => 'Shooter video games.',
                'status' => 0,
                'popular' => 1,
                'image' => '1641381026.jpg',
                'meta_title' => 'Shooter',
                'meta_descrip' => 'Shooter video games or shooters are a subgenre of action video games where the focus is almost entirely on the defeat of the character\'s enemies using the weapons given to the player.',
                'meta_keywords' => 'Shooter',
                'created_at' => '2021-12-14 16:04:02',
                'updated_at' => '2022-01-05 11:10:26',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Strategy Game',
                'slug' => 'Strategy',
                'description' => 'Strategy video games.',
                'status' => 0,
                'popular' => 1,
                'image' => '1641381349.jpg',
                'meta_title' => 'Strategy',
                'meta_descrip' => 'Strategy',
                'meta_keywords' => 'Strategy',
                'created_at' => '2021-12-18 18:48:52',
                'updated_at' => '2022-01-05 11:15:49',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Adventure Games',
                'slug' => 'Adventure',
                'description' => 'Adventures video games.',
                'status' => 1,
                'popular' => 1,
                'image' => '1641381479.jpg',
                'meta_title' => 'Adventure',
                'meta_descrip' => 'Adventure',
                'meta_keywords' => 'Adventure',
                'created_at' => '2021-12-18 19:07:47',
                'updated_at' => '2022-01-05 11:17:59',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Racing Games',
                'slug' => 'Racing video games',
                'description' => 'Racing video games.',
                'status' => 0,
                'popular' => 1,
                'image' => '1641382807.jpg',
                'meta_title' => 's',
                'meta_descrip' => 'Rading video Games',
                'meta_keywords' => 's',
                'created_at' => '2022-01-05 11:40:07',
                'updated_at' => '2022-01-05 11:40:07',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Sport Games',
                'slug' => 'Sport video games',
                'description' => 'Sport video games',
                'status' => 0,
                'popular' => 1,
                'image' => '1641383439.jpg',
                'meta_title' => 'Sport',
                'meta_descrip' => 'Sport',
                'meta_keywords' => 'Sport',
                'created_at' => '2022-01-05 11:50:39',
                'updated_at' => '2022-01-05 11:50:39',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Tower Defense',
                'slug' => 'Tower Defense video games',
                'description' => 'Tower Defense video games',
                'status' => 0,
                'popular' => 1,
                'image' => '1641384094.jpg',
                'meta_title' => 'Tower Defense video games',
                'meta_descrip' => 'Tower Defense video games',
                'meta_keywords' => 'Tower Defense video games',
                'created_at' => '2022-01-05 12:01:34',
                'updated_at' => '2022-01-05 12:01:34',
            ),
        ));
        
        
    }
}