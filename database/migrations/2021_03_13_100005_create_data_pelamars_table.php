<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coba_data_pelamars', function (Blueprint $table) {
           
            $table->increments('id');

            // Personal Details List
            $table->string('full_name');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country_address')->nullable();
            $table->string('city_address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('phone')->nullable();
            $table->string('gender')->nullable();

            //Education Details List
            $table->string('name_institution')->nullable();
            $table->string('status_education')->nullable();
            $table->string('field_education')->nullable();
            $table->string('degree_education')->nullable();
            $table->string('country_education')->nullable();
            $table->string('city_education')->nullable();
            $table->integer('start_year')->nullable();
            $table->integer('passing_year')->nullable();

            //Work Experience List
            $table->string('name_company')->nullable();
            $table->string('position')->nullable();
            $table->string('industry')->nullable();
            $table->string('work_period')->nullable();
            $table->string('name_supervisor')->nullable();
            $table->integer('number_of_employee')->nullable();
            $table->integer('salary')->nullable();
            $table->string('reason_leaving')->nullable();

            //Skill Language List
            $table->string('name_language')->nullable();
            $table->integer('skill_read')->nullable();
            $table->integer('skill_write')->nullable();
            $table->integer('skill_speak')->nullable();

            //Click Terms & Use
            $table->integer('click_sk')->nullable();

            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('level_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->string('name_position')->nullable();
            // $table->text('cv_upload')->nullable();
            $table->foreign('department_id')->references('id')->on('coba_departments')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('coba_levels')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('coba_countries')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pelamars');
    }
}
