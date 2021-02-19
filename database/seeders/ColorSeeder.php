<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert(['ref' => 'White', 'hex' => '#ffffff', 'name' => 'Blanc']);
        DB::table('colors')->insert(['ref' => 'Black', 'hex' => '#000000', 'name' => 'Negre']);
        DB::table('colors')->insert(['ref' => 'Blue', 'hex' => '#0000ff', 'name' => 'Blau']);
        DB::table('colors')->insert(['ref' => 'Red', 'hex' => '#ff0000', 'name' => 'Vermell']);
    }
}
