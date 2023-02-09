<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class FaqLang extends Model
{

    protected $table = "faq_lang";
    protected $fillable = ['faq_id', 'language_id', 'faq_question', 'faq_answer'];

    public function faq() 
    {
        return $this->belongsTo(Faq::class, 'faq_id');
    }
    public function language() 
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

}