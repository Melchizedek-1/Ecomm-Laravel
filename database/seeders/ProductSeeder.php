<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                "price"=>"400",
                "description"=>"A smartphone with 8gb RAM",
                "category"=>"mobile",
                "gallery"=>"https://homepages.cae.wisc.edu/~ece533/images/airplane.png"
            ],
            [
                'name'=>'SmartPhone',
                "price"=>"4200",
                "description"=>"A smartphone with 4gb RAM",
                "category"=>"mobile",
                "gallery"=>"https://homepages.cae.wisc.edu/~ece533/images/boat.png"
            ],
            [
                'name'=>'Panasonic TV',
                "price"=>"2500",
                "description"=>"A tv with HD screen",
                "category"=>"tv",
                "gallery"=>"https://homepages.cae.wisc.edu/~ece533/images/tulips.png"
            ],
            [
                'name'=>'Greatwall TV',
                "price"=>"10",
                "description"=>"A low specs TV",
                "category"=>"tv",
                "gallery"=>"https://homepages.cae.wisc.edu/~ece533/images/zelda.png"
            ],
            [
                'name'=>'LG Fridge',
                "price"=>"12070",
                "description"=>"A fridge with food stocked",
                "category"=>"fridge",
                "gallery"=>"https://homepages.cae.wisc.edu/~ece533/images/cat.png"
            ]
        ]);
    }
}
