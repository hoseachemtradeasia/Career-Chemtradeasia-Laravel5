<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class FaqDomain extends Model
{

    protected $table = "faq_domain";
    protected $fillable = ['faq_id', 'domain_id'];

    public function faq() 
    {
        return $this->belongsTo(Faq::class, 'faq_id');
    }
    public function domain() 
    {
        return $this->belongsTo(Domain::class, 'domain_id');
    }

}