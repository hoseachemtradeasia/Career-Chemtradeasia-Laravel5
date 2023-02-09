<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Faq;
use App\Domain;
use App\FaqDomain;
use App\FaqLang;
use App\Language;

class FAQController extends Controller
{
    public function index()
    {
        $faq = FaqDomain::where('domain_id', '=', '22')
        ->where('language_id', '=', '1')
        ->join('faq_lang', 'faq_domain.faq_id', '=', 'faq_lang.faq_id')
        ->get();

        return view('faq', ['faq' => $faq]);
    }
}
