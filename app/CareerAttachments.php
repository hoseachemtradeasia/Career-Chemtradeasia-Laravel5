<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CareerAttachments extends Model
{
    protected $table = "career_attachments";
    protected $fillable = ['application_id', 'file_path', 'created', 'modified'];
    public $timestamps = false;
    
    public function career_application() 
    {
        return $this->belongsTo(CareerApplication::class, 'application_id');
    }
    
}
