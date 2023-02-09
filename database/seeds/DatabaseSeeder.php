<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call('CountrySeeder');
        $this->call('DepartmentSeeder');
        $this->call('FaqSeeder');
        $this->call('LevelSeeder');
        $this->call('JobDescriptionSeeder');
        $this->call('RequirementSeeder');
        $this->call('VacancySeeder');
    }
}
