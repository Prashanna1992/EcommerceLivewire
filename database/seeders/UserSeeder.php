<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $superAdmin = [
            'name' => 'Prashanna Bhandari',
            'type' => 'Super Admin',
            'email' => 'prashanna@admin.com',
            'password' => bcrypt('!@#!@#!@#')
        ];

        DB::table('users')->insert($superAdmin);
    }
}
