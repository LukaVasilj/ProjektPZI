<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '1',
                'fname' => 'Luka',
                'lname' => 'Vasilj',
                'email' => 'staima@gmail.com',
                'phone' => '063863733',
                'address1' => 'Put Krizevca 35, Nema nista, Nema nista',
                'address2' => 'Nema nista',
                'city' => 'Mostar',
                'state' => 'Mostar',
                'country' => 'Bosna i Hercegovina',
                'pincode' => '88266',
                'total_price' => 12315,
                'payment_mode' => 'COD',
                'payment_id' => NULL,
                'status' => 0,
                'message' => NULL,
                'tracking_no' => 'ESHOP3883',
                'created_at' => '2022-01-02 18:59:25',
                'updated_at' => '2022-01-02 18:59:25',
            ),
        ));
        
        
    }
}