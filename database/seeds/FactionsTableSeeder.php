<?php

use Illuminate\Database\Seeder;

class FactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newFaction = new App\Factions();
        $newFaction->name ='Galactic Shipbuilder International';
        $newFaction->tag = 'GSI';
        $newFaction->founder_id = 2;
        $newFaction->owner_id = 3;
        $newFaction->save();
    }
}
