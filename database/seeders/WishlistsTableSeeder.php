<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WishlistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wishlists')->delete();
        
        \DB::table('wishlists')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => '1',
                'prod_id' => '4',
                'created_at' => '2021-12-29 11:37:44',
                'updated_at' => '2021-12-29 11:37:44',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => '1',
                'prod_id' => '1',
                'created_at' => '2022-01-04 22:26:41',
                'updated_at' => '2022-01-04 22:26:41',
            ),
            2 => 
            array (
                'id' => 5,
                'user_id' => '2',
                'prod_id' => '5',
                'created_at' => '2022-01-05 14:52:39',
                'updated_at' => '2022-01-05 14:52:39',
            ),
        ));
        
        
    }
}