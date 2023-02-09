<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\JobDescription;

class JobDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('job_description')->truncate();

            JobDescription::create(array(
                'department_id' => 1,
                'level_id' => 1,
                'country_id' => 1,
                'name_position' => 'IT Position 1',
                'job_description' => "Contoh Job Description"
            ));
            
            JobDescription::create(array(
                'department_id' => 1,
                'level_id' => 1,
                'country_id' => 1,
                'name_position' => 'IT Position 2',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 1,
                'level_id' => 2,
                'country_id' => 1,
                'name_position' => 'IT Position 1',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 1,
                'level_id' => 2,
                'country_id' => 1,
                'name_position' => 'IT Position 2',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 1,
                'level_id' => 1,
                'country_id' => 2,
                'name_position' => 'IT Position 1',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 1,
                'level_id' => 1,
                'country_id' => 2,
                'name_position' => 'IT Position 2',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 1,
                'level_id' => 2,
                'country_id' => 2,
                'name_position' => 'IT Position 1',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 1,
                'level_id' => 2,
                'country_id' => 2,
                'name_position' => 'IT Position 2',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 2,
                'level_id' => 1,
                'country_id' => 1,
                'name_position' => 'Marketing Position 1',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 2,
                'level_id' => 1,
                'country_id' => 1,
                'name_position' => 'Marketing Position 2',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 2,
                'level_id' => 2,
                'country_id' => 1,
                'name_position' => 'Marketing Position 1',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 2,
                'level_id' => 2,
                'country_id' => 1,
                'name_position' => 'Marketing Position 2',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 2,
                'level_id' => 1,
                'country_id' => 2,
                'name_position' => 'Marketing Position 1',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 2,
                'level_id' => 1,
                'country_id' => 2,
                'name_position' => 'Marketing Position 2',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 2,
                'level_id' => 2,
                'country_id' => 2,
                'name_position' => 'Marketing Position 1',
                'job_description' => "Contoh Job Description"
            ));
            JobDescription::create(array(
                'department_id' => 2,
                'level_id' => 2,
                'country_id' => 2,
                'name_position' => 'Marketing Position 2',
                'job_description' => "Contoh Job Description"
            ));
    }
}
