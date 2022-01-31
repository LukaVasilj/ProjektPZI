<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Luka',
                'email' => 'staima@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/rpFPen5i8vGYKYKO7Csfe.Rn5GaEhh6xLFlgy3K.NnxbGAnx6XEO',
                'lname' => '',
                'phone' => '',
                'address1' => '',
                'address2' => '',
                'city' => '',
                'state' => '',
                'country' => '',
                'pincode' => '',
                'role_as' => 0,
                'remember_token' => NULL,
                'created_at' => '2021-12-13 11:16:15',
                'updated_at' => '2021-12-26 16:33:59',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7yDtQF4mW.6q0oISjFe1DO06vASSu0q7kxD5KIhFo2vWFh1opyWMi',
                'lname' => '',
                'phone' => '',
                'address1' => '',
                'address2' => '',
                'city' => '',
                'state' => '',
                'country' => '',
                'pincode' => '',
                'role_as' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-12-13 11:42:16',
                'updated_at' => '2021-12-13 11:42:16',
            ),
        ));


    }
}
