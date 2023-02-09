<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('countries')->truncate();

        Country::create(array(
            'name_country' => 'Singapore',
        ));
        Country::create(array(
            'name_country' => 'Indonesia',
        ));
    }
}
