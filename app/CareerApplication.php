<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerApplication extends Model
{
    protected $table = "career_application";
    protected $fillable = ['job_id', 'email', 'full_name', 'country_id', 'city', 'address', 'zipcode', 'phone', 'dob', 'sex', 'skills', 'comments', 'created', 'modified', 'read_flag'];
    public $timestamps = false;
    
    public function country() 
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    
    public function career_job() 
    {
        return $this->belongsTo(CareerJob::class, 'job_id');
    }
    
    public function career_skilllanguage() 
    {
        return $this->hasMany(CareerSkilllanguage::class);
    }
    
        
    public function career_qualification() 
    {
        return $this->hasMany(CareerQualification::class);
    }
    
    public function career_experience() 
    {
        return $this->hasMany(CareerExperience::class);
    }
    
    public function career_attachments() 
    {
        return $this->hasMany(CareerAttachments::class);
    }
    
}
