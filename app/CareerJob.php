<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerJob extends Model
{

    protected $table = "career_job";
    protected $fillable = ['job_title', 'job_desc', 'job_location', 'country_id', 'category_id', 'dept_id', 'experience', 'post_date', 'close_date', 'close_flag', 'seo_url', 'seo_keyword', 'seo_title', 'seo_desc', 'created_by', 'modified_by', 'created', 'modified', 'priority', 'publish'];

    public function career_category() 
    {
        return $this->belongsTo(CareerCategory::class, 'category_id');
    }
    
    public function country() 
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    
    public function career_dept() 
    {
        return $this->belongsTo(CareerDept::class, 'dept_id');
    }
    
}