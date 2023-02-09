<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CountryLang;
use App\CareerDept;
use App\CareerCategory;

use App\CareerJob;
use Carbon\Carbon;

class CareerController extends Controller
{
    public function index(){
        $country_list = CountryLang::where('language_id', '1')
        ->join('career_job', 'career_job.country_id', '=', 'country_lang.country_id')
        ->pluck('country_name', 'country_lang.country_id');
        $department_list = CareerDept::pluck('dept_name', 'id');
        $category_list = CareerCategory::where('id', '<', '6')->pluck('category_name', 'id');

        $department = CareerDept::all();
        $date = Carbon::now();
        $avail_jobs_4 = CareerJob::where('dept_id', 4)->where('publish', 1)->where('close_date', '>', $date)->count();
        $avail_jobs_5 = CareerJob::where('dept_id', 5)->where('publish', 1)->where('close_date', '>', $date)->count();
        $avail_jobs_6 = CareerJob::where('dept_id', 6)->where('publish', 1)->where('close_date', '>', $date)->count();
        $avail_jobs_7 = CareerJob::where('dept_id', 7)->where('publish', 1)->where('close_date', '>', $date)->count();
        $avail_jobs_8 = CareerJob::where('dept_id', 8)->where('publish', 1)->where('close_date', '>', $date)->count();
        $avail_jobs_9 = CareerJob::where('dept_id', 9)->where('publish', 1)->where('close_date', '>', $date)->count();
        $avail_jobs_10 = CareerJob::where('dept_id', 10)->where('publish', 1)->where('close_date', '>', $date)->count();
        

        return view('home', [
            'country_list' => $country_list,
            'department_list' => $department_list,
            'category_list' => $category_list,
            'department' => $department,
            'avail_jobs_4' => $avail_jobs_4,
            'avail_jobs_5' => $avail_jobs_5,
            'avail_jobs_6' => $avail_jobs_6,
            'avail_jobs_7' => $avail_jobs_7,
            'avail_jobs_8' => $avail_jobs_8,
            'avail_jobs_9' => $avail_jobs_9,
            'avail_jobs_10' => $avail_jobs_10,
        ]);
    }
}
