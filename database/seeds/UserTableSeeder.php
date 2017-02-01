<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        /*User::create(array(
            'first_name'  =>  'Mark',
            'last_name'  =>  'Infantado',
            'mobile'  =>  '0987654321',
            'email'  =>  'infantado.markdonnie@gmail.com',
            'password'  =>  Hash::make('admin123'),
            'password_confirmation' => Hash::make('admin123')
        ));*/
    }
}