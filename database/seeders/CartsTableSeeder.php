<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carts')->delete();
        
        \DB::table('carts')->insert(array (
            0 => 
            array (
                'id' => 30,
                'user_id' => '2',
                'prod_id' => '1',
                'prod_qty' => '1',
                'created_at' => '2022-01-03 14:43:46',
                'updated_at' => '2022-01-03 14:43:46',
            ),
            1 => 
            array (
                'id' => 31,
                'user_id' => '1',
                'prod_id' => '1',
                'prod_qty' => '1',
                'created_at' => '2022-01-04 22:06:12',
                'updated_at' => '2022-01-04 22:27:27',
            ),
            2 => 
            array (
                'id' => 32,
                'user_id' => '1',
                'prod_id' => '5',
                'prod_qty' => '1',
                'created_at' => '2022-01-04 22:41:36',
                'updated_at' => '2022-01-04 22:41:36',
            ),
        ));
        
        
    }
}