<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => 'PHP',
            'description' => "PHP Hypertext Processor",
        ]);
        DB::table('teams')->insert([
            'name' => 'Python',
            'description' => "A little bit of snake",
        ]);
    }
}
