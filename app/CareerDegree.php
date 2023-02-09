<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerDegree extends Model
{

    protected $table = "career_degree";
    protected $fillable = ['degree_title', 'created_by', 'modified_by', 'created', 'modified', 'priority', 'publish'];

    public function career_qualification() 
    {
        return $this->hasMany(CareerQualification::class);
    }
}