<?php

use Illuminate\Database\Seeder;

class OresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newOre = new App\Ores();
        $newOre->name ='Platinum';
        $newOre->gather_cost = 1.022;
        $newOre->kwh_cost_to_process = 0.4786325;
        $newOre->base_ore_process_speed = 0.3250;
        $newOre->save();
    }
}
