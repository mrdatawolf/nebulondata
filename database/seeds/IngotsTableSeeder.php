<?php

use Illuminate\Database\Seeder;

class IngotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = new App\Ingots();
        $newUser->name ='Platinum';
        $newUser->base_ore_required_per_ingot = 250;
        $newUser->save();
    }
}
