<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = ['name' => 'โค้ก','cost' => 10,
        'price' => 30,'product_type_id' => 2,
        'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStY2xPCs7R7K5GCx7aO1tUlhJ8xxFhv0_zTA&s',
        'qty' => 5];
        DB::table('products')->insert($item);
        
        $item2 = ['name' => 'ขนมปัง','cost' => 9,
        'price' => 13,'product_type_id' => 5,
        'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaSSR3DQPrC88YhqAM7awkllUQTsRlkW_ibg&',
        'qty' => 7];
        DB::table('products')->insert($item2);
       
    }
}
