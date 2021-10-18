<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            'name' => 'test1',
            'email' => 'owner1@example.com',
            'password' => Hash::make('password'),
            'created_at' => '2021/01/01 11:11:11'
        ]);

        DB::table('owners')->insert([
            'name' => 'test2',
            'email' => 'owner2@example.com',
            'password' => Hash::make('password'),
            'created_at' => '2021/01/01 11:11:11'
        ]);

        DB::table('owners')->insert([
            'name' => 'test3',
            'email' => 'owner3@example.com',
            'password' => Hash::make('password'),
            'created_at' => '2021/01/01 11:11:11'
        ]);

        DB::table('owners')->insert([
            'name' => 'test4',
            'email' => 'owner4@example.com',
            'password' => Hash::make('password'),
            'created_at' => '2021/01/01 11:11:11'
        ]);

        DB::table('owners')->insert([
            'name' => 'test5',
            'email' => 'owner5@example.com',
            'password' => Hash::make('password'),
            'created_at' => '2021/01/01 11:11:11'
        ]);

        DB::table('owners')->insert([
            'name' => 'test6',
            'email' => 'owner6@example.com',
            'password' => Hash::make('password'),
            'created_at' => '2021/01/01 11:11:11'
        ]);

        DB::table('owners')->insert([
            'name' => 'test6',
            'email' => 'owner7@example.com',
            'password' => Hash::make('password'),
            'created_at' => '2021/01/01 11:11:11'
        ]);

        DB::table('owners')->insert([
            'name' => 'test8',
            'email' => 'owner8@example.com',
            'password' => Hash::make('password'),
            'created_at' => '2021/01/01 11:11:11'
        ]);

        DB::table('owners')->insert([
            'name' => 'test9',
            'email' => 'owner9@example.com',
            'password' => Hash::make('password'),
            'created_at' => '2021/01/01 11:11:11'
        ]);

        DB::table('owners')->insert([
            'name' => 'test10',
            'email' => 'owner10@example.com',
            'password' => Hash::make('password'),
            'created_at' => '2021/01/01 11:11:11'
        ]);
    }
}
