<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Faq extends Model
{

    protected $table = "faq";
    protected $fillable = ['draft_flag', 'parent_id', 'created_by', 'modified_by', 'created', 'modified', 'publish'];

    public function faq_domain() 
    {
        return $this->hasMany(FaqDomain::class);
    }

    public function faq_lang() 
    {
        return $this->hasMany(FaqLang::class);
    }
}