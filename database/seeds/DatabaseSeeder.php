<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('ConditionTableSeeder');
        $this->call('CityTableSeeder');
        $this->call('ProvinceTableSeeder');
		//$this->call('ItemTableSeeder');
    }
}
