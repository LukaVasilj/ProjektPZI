<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cate_id' => 3,
                'name' => 'Crysis Maximum Edition',
                'slug' => 'Crysis',
                'small_description' => 'Operating system: Windows 7 /
Processor: 2Hz Intel Core 2 Duo or AMD Athlon 64 X2 or better. /
Memory: 2 GB or more; 3 GB for (SP1) /
Disc Drive: 8X or faster. /
Hard Disk Space: At least 9 GB of free space. /
Video: DirectX 9.0c compatible video card 512 MB* /',
                'description' => 'Crysis',
                'original_price' => '49',
                'selling_price' => '29',
                'image' => '1641381762.jpg',
                'qty' => '8',
                'tax' => '12',
                'status' => 0,
                'trending' => 1,
                'meta_title' => 'Projekt',
                'meta_keywords' => 'staa',
                'meta_description' => 'satatas',
                'created_at' => '2021-12-15 13:44:47',
                'updated_at' => '2022-01-05 11:25:47',
            ),
            1 => 
            array (
                'id' => 4,
                'cate_id' => 3,
                'name' => 'Battlefield 1942',
                'slug' => 'Battlefield 1942',
                'small_description' => '500 MHz Intel® Pentium® or AMD Athlon™ processor
Memory	128 MB RAM
Disk Space	1.2 GB free hard disk space
Graphics Card	32 MB video card which supports Transform & Lighting and with DirectX 8.1 compatible driver',
                'description' => 'nemanista',
                'original_price' => '39',
                'selling_price' => '29',
                'image' => '1641382084.png',
                'qty' => '2',
                'tax' => '3',
                'status' => 0,
                'trending' => 1,
                'meta_title' => 'heh',
                'meta_keywords' => 'haha',
                'meta_description' => 'hoho',
                'created_at' => '2021-12-18 18:09:34',
                'updated_at' => '2022-01-05 11:28:04',
            ),
            2 => 
            array (
                'id' => 5,
                'cate_id' => 4,
                'name' => 'Age of Empires III',
                'slug' => 'Age of Empires III',
                'small_description' => 'OS:Windows XP.
Processor:Intel Core 2 Duo 2.2 GHz or AMD Athlon 64 X2 2.0 GHz.
Memory:2 GB RAM.
Graphics:64 MB NVIDIA GeForce 6800 or ATI Radeon X1300.
DirectX®:dx90c.
Hard Drive:12 GB HD space.',
                'description' => 'Age Of Empires 3',
                'original_price' => '60',
                'selling_price' => '30',
                'image' => '1641382245.jpg',
                'qty' => '9',
                'tax' => '1',
                'status' => 0,
                'trending' => 1,
                'meta_title' => 'daw',
                'meta_keywords' => 'fas',
                'meta_description' => 'fsfa',
                'created_at' => '2021-12-18 19:46:35',
                'updated_at' => '2022-01-05 11:30:45',
            ),
            3 => 
            array (
                'id' => 6,
                'cate_id' => 6,
                'name' => 'Need For Speed: Carbon',
                'slug' => 'Need For Speed: Carbon',
                'small_description' => 'Need For Speed: Carbon',
                'description' => 'CPU: Pentium 4 or equivalent.
CPU SPEED: 1.7 GHz.
RAM: 512 MB.
OS: Windows XP SP 2 (32Bit only), Windows 2000 Professional SP 4.
VIDEO CARD: 64MB DirectX 9.0c compatible video card (NVIDIA Geforce4 Ti+/ATI Radeon 8500+)
TOTAL VIDEO RAM: 64 MB.',
                'original_price' => '40',
                'selling_price' => '30',
                'image' => '1641382931.jpg',
                'qty' => '10',
                'tax' => '10',
                'status' => 0,
                'trending' => 1,
                'meta_title' => 'Racing Games',
                'meta_keywords' => 'Racing Games',
                'meta_description' => 'Racing Games',
                'created_at' => '2022-01-05 11:42:11',
                'updated_at' => '2022-01-05 11:42:11',
            ),
            4 => 
            array (
                'id' => 7,
                'cate_id' => 5,
                'name' => 'Minecraft',
                'slug' => 'Minecraft',
                'small_description' => 'Minecraft',
                'description' => 'CPU: Intel Core i5-4690 3.5GHz / AMD A10-7800 APU 3.5 GHz or equivalent.
CPU SPEED: Info.
RAM: 4 GB.
OS: Windows 10.
VIDEO CARD: GeForce 700 Series or AMD Radeon Rx 200 Series (excluding integrated chipsets) with OpenGL 4.5.
PIXEL SHADER: 5.0.
VERTEX SHADER: 5.0.
FREE DISK SPACE: 4 GB.',
                'original_price' => '60',
                'selling_price' => '20',
                'image' => '1641383055.jpg',
                'qty' => '10',
                'tax' => '10',
                'status' => 0,
                'trending' => 1,
                'meta_title' => 'Minecraft',
                'meta_keywords' => 'Minecraft',
                'meta_description' => 'Minecraft',
                'created_at' => '2022-01-05 11:44:15',
                'updated_at' => '2022-01-05 11:44:15',
            ),
            5 => 
            array (
                'id' => 8,
                'cate_id' => 5,
                'name' => 'Outcast 2:New Begining',
                'slug' => 'Outcast 2',
                'small_description' => 'Outcast 2',
                'description' => 'Requires a 64-bit processor and operating system.
OS: Windows 10, 64 Bit.
Processor: tbd.
Memory: 8 GB RAM.
Graphics: tbd.
DirectX: Version 11.',
                'original_price' => '60',
                'selling_price' => '50',
                'image' => '1641383195.jpg',
                'qty' => '10',
                'tax' => '10',
                'status' => 0,
                'trending' => 1,
                'meta_title' => 'Outcast 2',
                'meta_keywords' => 'Outcast 2',
                'meta_description' => 'Outcast 2',
                'created_at' => '2022-01-05 11:46:35',
                'updated_at' => '2022-01-05 11:46:35',
            ),
            6 => 
            array (
                'id' => 9,
                'cate_id' => 7,
                'name' => 'Fifa 2021',
                'slug' => 'Fifa 2021',
                'small_description' => 'Fifa 2021',
                'description' => 'CPU: Athlon X4 880K / Core i3-6100 or better
RAM: 8 GB
OS: Windows 7/8.1/10 64-Bit
VIDEO CARD: Radeon HD 7850 or better/GeForce GTX 660 or better
PIXEL SHADER: 5.0
VERTEX SHADER: 5.0
FREE DISK SPACE: 50 GB
DEDICATED VIDEO RAM: 1024 MB',
                'original_price' => '70',
                'selling_price' => '55',
                'image' => '1641383533.png',
                'qty' => '10',
                'tax' => '10',
                'status' => 0,
                'trending' => 1,
                'meta_title' => 'Fifa 2021',
                'meta_keywords' => 'Fifa 2021',
                'meta_description' => 'Fifa 2021',
                'created_at' => '2022-01-05 11:52:13',
                'updated_at' => '2022-01-05 11:52:13',
            ),
            7 => 
            array (
                'id' => 10,
                'cate_id' => 3,
                'name' => 'Call of Duty: Moder Warfare 2',
                'slug' => 'Call of Duty: Moder Warfare 2',
                'small_description' => 'Call of Duty: Moder Warfare 2',
            'description' => 'OS: Microsoft Windows XP or Windows Vista (Windows 95/98/ME/2000 are unsupported)
Processor: Intel Pentium 4 3.2 GHz or AMD Athlon 64 3200+ processor or better supported.
Memory: 1 GB RAM.
Graphics: 256 MB NVIDIA GeForce 6600GT or better or ATI Radeon 1600XT or better.',
                'original_price' => '30',
                'selling_price' => '15',
                'image' => '1641383719.jpg',
                'qty' => '10',
                'tax' => '10',
                'status' => 0,
                'trending' => 1,
                'meta_title' => 'Call of Duty: Moder Warfare 2',
                'meta_keywords' => 'Call of Duty: Moder Warfare 2',
                'meta_description' => 'Call of Duty: Moder Warfare 2',
                'created_at' => '2022-01-05 11:54:33',
                'updated_at' => '2022-01-05 11:55:19',
            ),
            8 => 
            array (
                'id' => 11,
                'cate_id' => 8,
                'name' => 'Bloons TD 5',
                'slug' => 'Bloons TD 5',
                'small_description' => 'Bloons TD 5',
                'description' => 'CPU: Info
CPU SPEED: 1.5Ghz or better
RAM: 512 MB
OS: Windows 7 (32 & 64bit)
VIDEO CARD: OpenGL 2.0 compatible, ATI, Nvidia or Intel HD
SOUND CARD: Windows compatible sound card
FREE DISK SPACE: 512 MB',
                'original_price' => '40',
                'selling_price' => '20',
                'image' => '1641384177.jpg',
                'qty' => '10',
                'tax' => '10',
                'status' => 0,
                'trending' => 1,
                'meta_title' => 'Tower TD5',
                'meta_keywords' => 'Tower TD5',
                'meta_description' => 'Tower TD5',
                'created_at' => '2022-01-05 12:02:57',
                'updated_at' => '2022-01-05 12:02:57',
            ),
        ));
        
        
    }
}