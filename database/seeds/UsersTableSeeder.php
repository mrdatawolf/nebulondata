<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'mr_datawolf',
            'email' => 'patrickmoon@gmail.com',
            'password' => bcrypt('not4u2know'),
        ]);
    }
}
