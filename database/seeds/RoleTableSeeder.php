<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'title'=>'Super User',
                'slug'=>'admin',
                'status'=>1,
            ],
            [
                'title'=>'Teacher',
                'slug'=>'teacher',
                'status'=>1,
            ],
            [
                'title'=>'Student',
                'slug'=>'student',
                'status'=>1
            ]
            
        ];
        \DB::table('role')->insert($roles);
    }
}
