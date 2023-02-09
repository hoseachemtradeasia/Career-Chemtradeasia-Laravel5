<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerNotice extends Model
{

    protected $table = "career_notice";
    protected $fillable = ['notice_title', 'created_by', 'modified_by', 'created', 'modified', 'priority', 'publish'];

    public function career_experience() 
    {
        return $this->hasMany(CareerExperience::class);
    }
}