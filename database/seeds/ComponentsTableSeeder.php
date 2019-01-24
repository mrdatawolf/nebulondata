<?php

use Illuminate\Database\Seeder;

class ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newComp = new App\Components();
        $newComp->name = 'Girder';
        $newComp->ingots_needed = json_encode([
            'cobalt' => 0,
            'gold' => 0,
            'iron' => 7,
            'magnesium' => 0,
            'nickel' => 0,
            'platinum' => 0,
            'silicon' => 0,
            'silver' => 0,
            'gravel' => 0,
            'uranium' => 0,
            'naquadah' => 0,
            'neitronium' => 0,
            'trinium' => 0
        ]);
        $newComp->physical_credits_needed = 0;
        $newComp->save();
    }
}
