<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Language extends Model
{

    protected $table = "language";
    protected $fillable = ['language_title', 'language_code', 'default', 'priority', 'publish'];

    public function country_lang() 
    {
        return $this->hasMany(CountryLang::class);
    }

    public function faq_lang() 
    {
        return $this->hasMany(FaqLang::class);
    }
}