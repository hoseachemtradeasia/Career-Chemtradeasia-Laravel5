<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\CountryLang;
use App\CareerDept;
use App\CareerCategory;
use App\CareerJob;

class VacancyController extends Controller
{
    public function index(Request $request){

        $country_list = CountryLang::where('language_id', '1')
        ->join('career_job', 'career_job.country_id', '=', 'country_lang.country_id')
        ->pluck('country_name', 'country_lang.country_id');
        $department_list = CareerDept::pluck('dept_name', 'id');
        $category_list = CareerCategory::where('id', '<', '6')->pluck('category_name', 'id');

        $dept_id = $request->department_id;
        $category_id = $request->category_id;
        $country_id = $request->country_id;
        $departments = CareerDept::all();
        $date = Carbon::now();

        if ($dept_id == null && $category_id == null && $country_id == null) {
            $career_job = CareerJob::
            where('publish', 1)->
            where('close_date', '>', $date)->
            get();
        } 
        
        if (empty($career_job)) {
            if ($category_id == null && $country_id == null) {
                $career_job = CareerJob::
                where('dept_id', $dept_id)->
                where('publish', 1)->
                where('close_date', '>', $date)->
                get();
            }
        }
        
        if (empty($career_job)) {
            if ($dept_id == null && $country_id == null) {
                $career_job = CareerJob::
                where('category_id', $category_id)->
                where('publish', 1)
                ->where('close_date', '>', $date)
                ->get();
            }
        }
        
        if (empty($career_job)) {
            if ($dept_id == null && $category_id == null) {
                $career_job = CareerJob::
                where('country_id', $country_id)->
                where('publish', 1)->
                where('close_date', '>', $date)->
                get();
            }
        }
        
        if (empty($career_job)) {
            if ($dept_id == null && $category_id == null) {
                $career_job = CareerJob::
                where('country_id', $country_id)->
                where('publish', 1)->
                where('close_date', '>', $date)->
                get();
            }
        }

        if (empty($career_job)) {
            if ($dept_id == null) {
                $career_job = CareerJob::
                where('category_id', $category_id)->
                where('country_id', $country_id)->
                where('publish', 1)->
                where('close_date', '>', $date)->
                get();
            }
        }
        
        if (empty($career_job)) {
            if ($category_id == null) {
                $career_job = CareerJob::
                where('dept_id', $dept_id)->
                where('country_id', $country_id)->
                where('publish', 1)->
                where('close_date', '>', $date)->
                get();
            } 
        }

        if (empty($career_job)) {
            if ($category_id == null) {
                $career_job = CareerJob::
                where('dept_id', $dept_id)->
                where('country_id', $country_id)->
                where('publish', 1)->
                where('close_date', '>', $date)->
                get();
            } 
        }

        if (empty($career_job)) {
            if ($country_id == null) {
                $career_job = CareerJob::
                where('dept_id', $dept_id)->
                where('category_id', $category_id)->
                where('publish', 1)->
                where('close_date', '>', $date)->
                get();
            }
        }

        if (empty($career_job)) {
            if ($country_id == null) {
                $career_job = CareerJob::
                where('dept_id', $dept_id)->
                where('category_id', $category_id)->
                where('publish', 1)->
                where('close_date', '>', $date)->
                get();
            }
        }

        if (empty($career_job)) {
            $career_job = CareerJob::
            where('dept_id', $dept_id)->
            where('category_id', $category_id)->
            where('country_id', $country_id)->
            where('publish', 1)->
            where('close_date', '>', $date)->
            get();
        }
        

        return view('vacancy-coba', [
            'country_list' => $country_list,
            'departments' => $departments,
            'department_list' => $department_list,
            'category_list' => $category_list,
            'career_job' => $career_job,
        ]);
    }
}
