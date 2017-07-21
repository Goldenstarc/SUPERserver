<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('roles')->insert([
            'name' => 'admin',
            'canAddnewUser' => 1,
            'canDeleteUser' => 1,
            'canAddnewUser' => 1,
            'canAddNewPost' => 1,
            'canEditPost' => 1,
            'canDeletePost' => 1,
            'canAddnewUser' => 1,
            'canAddnewUser' => 1,

            ]);

        DB::table('roles')->insert([
            'name' => 'subscriber',
            'canAddnewUser' => 0,
            'canDeleteUser' => 0,
            'canAddnewUser' => 0,
            'canAddNewPost' => 0,
            'canEditPost' => 0,
            'canDeletePost' => 0,
            'canAddnewUser' => 0,

        ]);




        //            DB::table('users')->insert([
//                'name' => 'user2',
//                'email' => 'user2@email.com',
//                'password' => bcrypt('password'),
//            ]);


    }
}
