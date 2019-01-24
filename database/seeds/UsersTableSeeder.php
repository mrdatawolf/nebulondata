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
        $newUser = new App\User();
        $newUser->name ='mr_datawolf';
        $newUser->email = 'patrickmoon@gmail.com';
        $newUser->password = bcrypt('not4u2know');
        $newUser->save();
    }
}
