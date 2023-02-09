<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Country extends Model
{

    protected $table = "country";
    protected $fillable = ['country_code', 'country_flag', 'created_by', 'modified_by', 'created', 'modified', 'priority', 'publish'];

    public function career_qualification() 
    {
        return $this->hasMany(CareerQualification::class);
    }
    
    public function career_job() 
    {
        return $this->hasMany(CareerJob::class);
    }
    
    public function career_experience() 
    {
        return $this->hasMany(CareerExperience::class);
    }
    
    public function country_lang() 
    {
        return $this->hasMany(CountryLang::class);
    }
}