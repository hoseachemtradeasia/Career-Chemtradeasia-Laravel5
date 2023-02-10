<?php

namespace App\Http\Controllers;

use App\CareerJob;
use App\CareerDept;
use App\CountryLang;
use App\CareerCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SalsaController extends Controller
{
    public function index(Request $request)
    {
        $country_list = DB::table('career_country')->get();
        $country_id = $request->country_id;
        $location_list = DB::table('career_location')->get();
        $company_list = DB::table('career_company')->get();

        $location_id = $request->location_id;
        $company_id = $request->company_id;

        $date = Carbon::now();

        if ($country_id == null && $location_id == null && $company_id == null) {
            $vacancy = DB::table('career_detailjob')
                ->join('career_company', 'career_company.id', '=', 'career_detailjob.id_company')
                ->join('career_location', 'career_location.id', '=', 'career_detailjob.id_location')
                ->get();
        } elseif ($location_id == null && $company_id == null) {
            $vacancy = DB::table('career_detailjob')
                ->join('career_company', 'career_company.id', '=', 'career_detailjob.id_company')
                ->join('career_location', 'career_location.id', '=', 'career_detailjob.id_location')
                ->join('career_country', 'career_country.id', '=', 'career_location.id_country')
                ->where('career_location.id_country', '=', $country_id)
                ->get();
        } elseif ($country_id == null && $company_id == null) {
            $vacancy = DB::table('career_detailjob')
                ->join('career_company', 'career_company.id', '=', 'career_detailjob.id_company')
                ->join('career_location', 'career_location.id', '=', 'career_detailjob.id_location')
                ->where('career_detailjob.id_location', '=', $location_id)
                ->get();
        } elseif ($country_id == null && $location_id == null) {
            $vacancy = DB::table('career_detailjob')
                ->join('career_company', 'career_company.id', '=', 'career_detailjob.id_company')
                ->join('career_location', 'career_location.id', '=', 'career_detailjob.id_location')
                ->where('career_detailjob.id_company', '=', $company_id)
                ->get();
        } elseif ($country_id == null) {
            $vacancy = DB::table('career_detailjob')
                ->join('career_company', 'career_company.id', '=', 'career_detailjob.id_company')
                ->join('career_location', 'career_location.id', '=', 'career_detailjob.id_location')
                ->where('career_detailjob.id_company', '=', $company_id)
                ->where('career_detailjob.id_location', '=', $location_id)
                ->get();
        } elseif ($location_id == null) {
            $vacancy = DB::table('career_detailjob')
                ->join('career_company', 'career_company.id', '=', 'career_detailjob.id_company')
                ->join('career_location', 'career_location.id', '=', 'career_detailjob.id_location')
                ->where('career_location.id_country', '=', $country_id)
                ->where('career_detailjob.id_location', '=', $location_id)
                ->get();
        } elseif ($company_id == null) {
            $vacancy = DB::table('career_detailjob')
                ->join('career_company', 'career_company.id', '=', 'career_detailjob.id_company')
                ->join('career_location', 'career_location.id', '=', 'career_detailjob.id_location')
                ->where('career_location.id_country', '=', $country_id)
                ->where('career_detailjob.id_location', '=', $location_id)
                ->get();
        } else {
            $vacancy = DB::table('career_detailjob')
                ->join('career_company', 'career_company.id', '=', 'career_detailjob.id_company')
                ->join('career_location', 'career_location.id', '=', 'career_detailjob.id_location')
                ->where('career_detailjob.id_company', '=', $company_id)
                ->where('career_location.id_country', '=', $country_id)
                ->where('career_detailjob.id_location', '=', $location_id)
                ->get();
        }

        // if ($dept_id == null && $category_id == null && $country_id == null) {
        //     $career_job = CareerJob::where('publish', 1)->where('close_date', '>', $date)->get();
        // }

        // if (empty($career_job)) {
        //     if ($category_id == null && $country_id == null) {
        //         $career_job = CareerJob::where('dept_id', $dept_id)->where('publish', 1)->where('close_date', '>', $date)->get();
        //     }
        // }

        // if (empty($career_job)) {
        //     if ($dept_id == null && $country_id == null) {
        //         $career_job = CareerJob::where('category_id', $category_id)->where('publish', 1)
        //             ->where('close_date', '>', $date)
        //             ->get();
        //     }
        // }

        // if (empty($career_job)) {
        //     if ($dept_id == null && $category_id == null) {
        //         $career_job = CareerJob::where('country_id', $country_id)->where('publish', 1)->where('close_date', '>', $date)->get();
        //     }
        // }

        // if (empty($career_job)) {
        //     if ($dept_id == null && $category_id == null) {
        //         $career_job = CareerJob::where('country_id', $country_id)->where('publish', 1)->where('close_date', '>', $date)->get();
        //     }
        // }

        // if (empty($career_job)) {
        //     if ($dept_id == null) {
        //         $career_job = CareerJob::where('category_id', $category_id)->where('country_id', $country_id)->where('publish', 1)->where('close_date', '>', $date)->get();
        //     }
        // }

        // if (empty($career_job)) {
        //     if ($category_id == null) {
        //         $career_job = CareerJob::where('dept_id', $dept_id)->where('country_id', $country_id)->where('publish', 1)->where('close_date', '>', $date)->get();
        //     }
        // }

        // if (empty($career_job)) {
        //     if ($category_id == null) {
        //         $career_job = CareerJob::where('dept_id', $dept_id)->where('country_id', $country_id)->where('publish', 1)->where('close_date', '>', $date)->get();
        //     }
        // }

        // if (empty($career_job)) {
        //     if ($country_id == null) {
        //         $career_job = CareerJob::where('dept_id', $dept_id)->where('category_id', $category_id)->where('publish', 1)->where('close_date', '>', $date)->get();
        //     }
        // }

        // if (empty($career_job)) {
        //     if ($country_id == null) {
        //         $career_job = CareerJob::where('dept_id', $dept_id)->where('category_id', $category_id)->where('publish', 1)->where('close_date', '>', $date)->get();
        //     }
        // }

        // if (empty($career_job)) {
        //     $career_job = CareerJob::where('dept_id', $dept_id)->where('category_id', $category_id)->where('country_id', $country_id)->where('publish', 1)->where('close_date', '>', $date)->get();
        // }



        return view('vacancy-coba', [
            'vacancy' => $vacancy,
            'country_list' => $country_list,
            'location_list' => $location_list,
            'company_list' => $company_list
        ]);
    }

    public function detailvacancy($id)
    {
        $detailjob = DB::table('career_detailjob')
            ->join('career_location', 'career_location.id', '=', 'career_detailjob.id_location')
            ->join('career_company', 'career_company.id', '=', 'career_detailjob.id_company')
            ->where('career_detailjob.id', '=', $id)
            ->get();
        return view('detail-job', [
            'detailjob' => $detailjob
        ]);
    }
}
