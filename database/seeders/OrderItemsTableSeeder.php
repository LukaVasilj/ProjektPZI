<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_items')->delete();
        
        \DB::table('order_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => '1',
                'prod_id' => '1',
                'qty' => '1',
                'price' => '12315',
                'created_at' => '2022-01-02 18:59:25',
                'updated_at' => '2022-01-02 18:59:25',
            ),
        ));
        
        
    }
}