<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'username'=>'root',
            'first_name'=>'super',
            'last_name'=>'root',
            'email'=>'super@root.std',
            'profile_images'=>'super@root.std',
            'role_id'=>1,
            'password'=>bcrypt('root'),
            'status'=>1,

        ]);
    }
}
