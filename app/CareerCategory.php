<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerCategory extends Model
{

    protected $table = "career_category";
    protected $fillable = ['category_name', 'created_by', 'modified_by', 'created', 'modified', 'priority', 'publish'];

    public function career_job() 
    {
        return $this->hasMany(CareerJob::class);
    }
}