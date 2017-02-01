<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ConditionTableSeeder extends Seeder
{
    /**
     * run the database seed
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('condition')->insert([
            'conditionitem' => 'Brand New'
        ]);

        DB::table('condition')->insert([
            'conditionitem' => '2nd Hand(Used)'
        ]);*/

        $conditions = ['Brand New', '2nd Hand(Used)'];

        foreach ($conditions as $condition) {
            DB::table('condition')->insert([
                'conditionitem' => $condition,
            ]);
        }


    }

}

