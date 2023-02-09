<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coba_job_descriptions', function (Blueprint $table) {
           
            $table->increments('id');
            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('level_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->string('name_position')->nullable();
            $table->text('job_description')->nullable();
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
        Schema::dropIfExists('job_descriptions');
    }
}
