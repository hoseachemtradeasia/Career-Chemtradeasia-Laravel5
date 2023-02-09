<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerDept extends Model
{

    protected $table = "career_dept";
    protected $fillable = ['dept_name', 'dept_desc', 'created_by', 'modified_by', 'created', 'modified', 'priority', 'publish'];

    public function career_job() 
    {
        return $this->hasMany(CareerJob::class);
    }
}