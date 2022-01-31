<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '1',
                'prod_id' => '1',
                'user_review' => 'Sve extra.Opet sve extraThis is my',
                'created_at' => '2022-01-03 13:42:45',
                'updated_at' => '2022-01-03 14:37:01',
            ),
        ));
        
        
    }
}