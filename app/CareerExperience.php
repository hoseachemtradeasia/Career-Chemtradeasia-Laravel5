<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerExperience extends Model
{

    protected $table = "career_experience";
    protected $fillable = ['application_id', 'company_name', 'country_id', 'city', 'position', 'work_descreption', 'status', 'starting_date', 'end_date', 'leaving_reason', 'notice_id', 'notice_other', 'contact_employer', 'created', 'modified'];
    public $timestamps = false;
    
    public function career_application() 
    {
        return $this->belongsTo(CareerApplication::class, 'application_id');
    }
    
    public function country() 
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    
    public function career_notice() 
    {
        return $this->belongsTo(CareerNotice::class, 'notice_id');
    }
}