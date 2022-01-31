<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ratings')->delete();
        
        \DB::table('ratings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '1',
                'prod_id' => '1',
                'stars_rated' => '4',
                'created_at' => '2022-01-02 18:59:33',
                'updated_at' => '2022-01-03 12:59:43',
            ),
        ));
        
        
    }
}