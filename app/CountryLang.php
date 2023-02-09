<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CountryLang extends Model
{

    protected $table = "country_lang";
    protected $fillable = ['country_id', 'language_id', 'country_name'];

    public function country() 
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function language() 
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

}