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
        //Girder
        DB::table('components')->insert([
            'name' => 'Girder',
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
            'trinium' => 0,
            'process_fee' => 0
        ]);
    }
}
