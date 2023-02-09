<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('level')->truncate();

        Level::create(array(
            'name_level' => 'Level 1',
        ));
        Level::create(array(
            'name_level' => 'Level 2',
        ));
    }
}
