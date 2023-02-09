<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerQualification extends Model
{

    protected $table = "career_qualification";
    protected $fillable = ['application_id', 'institution_name', 'country_id', 'city', 'degree_id', 'field_id', 'field_other', 'status', 'start_year', 'passing_year', 'created', 'modified'];
    public $timestamps = false;
    
    public function career_application() 
    {
        return $this->belongsTo(CareerApplication::class, 'application_id');
    }
    
    public function country() 
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    
    public function career_degree() 
    {
        return $this->belongsTo(CareerDegree::class, 'degree_id');
    }

    public function career_field() 
    {
        return $this->belongsTo(CareerField::class, 'field_id');
    }
}