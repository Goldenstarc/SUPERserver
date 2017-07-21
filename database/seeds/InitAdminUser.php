<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                'name' => 'SuperAdmin',
                'email' => 'Admin@BaghaliMoon.com',
                'is_active'=>1,
                'role_id'=>1,
                'password' => bcrypt('@BaghaliMoonSuperServer'),
            ]);
    }
}
