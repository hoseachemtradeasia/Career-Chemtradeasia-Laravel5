<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CareerJob;
use App\CountryLang;

class DetailJobController extends Controller
{
    public function index($id)
    {
            
        $career_job = CareerJob::findorFail($id);
        $country = CountryLang::where('language_id', '1')
        ->where('country_id', '=', $career_job->country_id)
        ->first();
        

        return view('detailjob', [
            'career_job' => $career_job,
            'country' => $country,
        ]);
    }
}
