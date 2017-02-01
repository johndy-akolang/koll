<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('category')->insert([
            'categorylist' => 'Buy and Sell'
        ]);

        DB::table('category')->insert([
            'categorylist' => 'Real Estate'
        ]);

        DB::table('category')->insert([
            'categorylist'  => 'Vehicles'
        ]);

        DB::table('category')->insert([
            'categorylist'  => 'Motorcycle'
        ]);

        DB::table('category')->insert([
            'categorylist'  => 'Fashion'
        ]);

        DB::table('category')->insert([
            'categorylist'  => 'Electronics'
        ]);

        DB::table('category')->insert([
            'categorylist'  => 'Sports'
        ]);

        DB::table('category')->insert([
            'categorylist'  => 'Toys'
        ]);

        DB::table('category')->insert([
            'categorylist'  => 'Job'
        ]);

        DB::table('category')->insert([
            'categorylist'  => 'Pets'
        ]);

        DB::table('category')->insert([
            'categorylist'  => 'Others'
        ]);*/

        $categorys = ['Buy and Sell', 'Real Estate', 'Vehicles', 'Motorcycle', 'Fashion', 'Electronics', 'Sports', 'Toys', 'Job', 'Pets', 'Others'];

        foreach ($categorys as $category) {
            DB::table('category')->insert([
                'categorylist'  => $category,
            ]);
        }

    }


}