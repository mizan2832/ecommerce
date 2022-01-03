<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' 	   => 'Mizanur Rahman',
            'email'	   => 'admin@gmail.com',
            'role_id'  =>  1,
            'number'   => '01515612832',
            'country'  => 'Bangladesh',
            'city'     => 'Dhaka',
            'address'  => 'Kollanpur,Dhaka',
            'payment_type'=> 'cashon',
            'password' =>  bcrypt('forloop1'),
            
        ]);
        DB::table('users')->insert([
            'name' 	   => 'Farjana Rahman',
            'email'	   => 'user@gmail.com',
            'role_id'  =>  2,
            'number'   => '01515612832',
            'country'  => 'Bangladesh',
            'city'     => 'Dhaka',
            'address'  => 'Kollanpur,Dhaka',
            'payment_type'=> 'cashon',
            'password' =>  bcrypt('forloop1'),
        ]);
    
    }
}
