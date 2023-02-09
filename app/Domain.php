<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Domain extends Model
{

    protected $table = "domain";
    protected $fillable = ['domain_type', 'domain_name', 'domain_image', 'domain_url', 'domain_css', 'domain_currency', 'domain_template', 'priority', 'facebook_url', 'twitter_url', 'pinterest_url', 'linkedin_url', 'googleTagmanager'];

    public function faq_domain() 
    {
        return $this->hasMany(FaqDomain::class);
    }
}