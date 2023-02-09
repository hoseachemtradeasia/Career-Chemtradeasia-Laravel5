<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerSkilllanguage extends Model
{

    protected $table = "career_skilllanguage";
    protected $fillable = ['application_id', 'skilllanguage_id', 'option1', 'option2', 'option3', 'created', 'modified'];
    public $timestamps = false;
    
    public function career_application() 
    {
        return $this->belongsTo(CareerApplication::class, 'application_id');
    }
    
    public function career_language() 
    {
        return $this->belongsTo(CareerLanguage::class, 'skilllanguage_id');
    }

}