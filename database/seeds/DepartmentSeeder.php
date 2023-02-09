<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('department')->truncate();

        Department::create(array(
            'name_department' => 'IT',
        ));
        Department::create(array(
            'name_department' => 'Marketing',
        ));
    }
}
