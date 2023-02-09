<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerLanguage extends Model
{

    protected $table = "career_language";
    protected $fillable = ['language_title', 'created_by', 'modified_by', 'created', 'modified', 'priority', 'publish'];

    public function career_skilllanguage() 
    {
        return $this->hasMany(CareerSkilllanguage::class);
    }
}