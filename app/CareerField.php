<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerField extends Model
{

    protected $table = "career_field";
    protected $fillable = ['field_title', 'created_by', 'modified_by', 'created', 'modified', 'priority', 'publish'];

    public function career_qualification() 
    {
        return $this->hasMany(CareerQualification::class);
    }
}