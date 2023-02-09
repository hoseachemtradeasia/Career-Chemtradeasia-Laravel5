<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CareerJob;
use App\CountryLang;
use App\CareerField;
use App\CareerDegree;
use App\CareerLanguage;
use App\CareerNotice;

use App\CareerApplication;
use App\CareerExperience;
use App\CareerQualification;
use App\CareerSkilllanguage;
use App\CareerAttachments;


class FormController extends Controller
{
    public function index($id){
        $career_job = CareerJob::findorFail($id);
        $country_list = CountryLang::where('language_id', '1')->pluck('country_name', 'country_id');
        $field_list = CareerField::pluck('field_title', 'id');
        $degree_list = CareerDegree::where('id', '<', '25')->pluck('degree_title', 'id');
        $language_list = CareerLanguage::where('id', '<', '8')->orWhere('id', '>', '19')->pluck('language_title', 'id');
        $notice_list = CareerNotice::where('id', '<', '17')->pluck('notice_title', 'id');
        
        $country = CountryLang::where('language_id', '1')
        ->where('country_id', '=', $career_job->country_id)
        ->first();

        return view('form', [
            'career_job' => $career_job,
            'country' => $country,
            'country_list' => $country_list,
            'field_list' => $field_list,
            'degree_list' => $degree_list,
            'language_list' => $language_list,
            'notice_list' => $notice_list,
        ]);
    }


    public function store(Request $request)
    {
        
        $this->validate($request,[
			'full_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',
            'sex' => 'required',
            'read_flag' => 'required',
            'company_name_1' => 'required',
            'institution_name' => 'required',
            'file' => 'required|file|mimes:pdf|max:204800',
            'g-recaptcha-response' => 'captcha'
    	]);


        //Declare Variable Career Application
        $job_id = $request->job_id;
        $full_name = $request->full_name;
        $email = $request->email;
        $country_id_personal = $request->country_id_personal;
        $city_personal = $request->city_personal;
        $address = $request->address;
        $zipcode = $request->zipcode;
        $phone = $request->phone;
        $dob = $request->dob;
        $sex = $request->sex;
        $skills = "-";
        $comments = "-";
        $read_flag = $request->read_flag;


        //Declare Variable Career Qualification 
        $institution_name = $request->institution_name;
        $status = $request->status;
        $field_id = $request->field_id;
        $degree_id = $request->degree_id;
        $country_id_education = $request->country_id_education;
        $city_education = $request->city_education;
        $start_year = $request->start_year;
        $passing_year = $request->passing_year;
        
    // Declare First Option
        //Declare Variable Career Experience
        $company_name_1 = $request->company_name_1;
        $position_1 = $request->position_1;
        $starting_date_1 = $request->starting_date_1;
        $end_date_1 = $request->end_date_1;
        $work_descreption_1 = $request->work_descreption_1;
        $leaving_reason_1 = $request->leaving_reason_1;

        //Declare Variable Career Skill Language
        $skilllanguage_id_1 = $request->skilllanguage_id_1;
        $option1_1 = $request->option1_1;
        $option2_1 = $request->option2_1;
        $option3_1 = $request->option3_1;
        
    // Declare Second Option
        //Declare Variable Career Experience
        $company_name_2 = $request->company_name_2;
        $position_2 = $request->position_2;
        $starting_date_2 = $request->starting_date_2;
        $end_date_2 = $request->end_date_2;
        $work_descreption_2 = $request->work_descreption_2;
        $leaving_reason = $request->leaving_reason;

        //Declare Variable Career Skill Language
        $skilllanguage_id_2 = $request->skilllanguage_id_2;
        $option1_2 = $request->option1_2;
        $option2_2 = $request->option2_2;
        $option3_2 = $request->option3_2;
        
    // Declare Third Option
        //Declare Variable Career Experience
        $company_name_3 = $request->company_name_3;
        $position_3 = $request->position_3;
        $starting_date_3 = $request->starting_date_3;
        $end_date_3 = $request->end_date_3;
        $work_descreption_3 = $request->work_descreption_3;
        $leaving_reason_3 = $request->leaving_reason_3;

        //Declare Variable Career Skill Language
        $skilllanguage_id_3 = $request->skilllanguage_id_3;
        $option1_3 = $request->option1_3;
        $option2_3 = $request->option2_3;
        $option3_3 = $request->option3_3;
    	
        //Make Data Career Application from Form
        $career_application = new CareerApplication;
        $career_application->job_id = $job_id;
        $career_application->email = $email;
        $career_application->full_name = $full_name;
        $career_application->country_id = $country_id_personal;
        $career_application->city = $city_personal;
        $career_application->address = $address;
        $career_application->zipcode = $zipcode;
        $career_application->phone = $phone;
        $career_application->dob = $dob;
        $career_application->sex = $sex;
        $career_application->skills = $skills;
        $career_application->comments = $comments;
        $career_application->read_flag = $read_flag;
        $career_application->save();

        $application = CareerApplication::orderBy('id', 'DESC')->first();

        //Make Data Career Qualification from Form 
        $career_qualification = new CareerQualification;
        $career_qualification->application_id = $application->id;
        $career_qualification->institution_name = $institution_name;
        $career_qualification->status = $status;
        $career_qualification->field_id = $field_id;
        $career_qualification->degree_id = $degree_id;
        $career_qualification->country_id = $country_id_education;
        $career_qualification->city = $city_education;
        $career_qualification->start_year = $start_year;
        $career_qualification->passing_year = $passing_year;
        $career_qualification->save();
        
    //For First Opinion
        //Make Data Career Experience from Form 
        $career_experience = new CareerExperience;
        $career_experience->application_id = $application->id;
        $career_experience->company_name = $company_name_1;
        $career_experience->position = $position_1;
        $career_experience->starting_date = $starting_date_1;
        $career_experience->end_date = $end_date_1;
        $career_experience->work_descreption = $work_descreption_1;
        $career_experience->leaving_reason = $leaving_reason_1;
        $career_experience->save();

        // Make Data Career Skill Language from Form 
        $career_skilllanguage = new CareerSkilllanguage;
        $career_skilllanguage->application_id = $application->id;
        $career_skilllanguage->skilllanguage_id = $skilllanguage_id_1;
        $career_skilllanguage->option1 = $option1_1;
        $career_skilllanguage->option2 = $option2_1;
        $career_skilllanguage->option3 = $option3_1;
        $career_skilllanguage->save();
        
    //For Second Opinion
        //Make Data Career Experience from Form 
        if ($company_name_2 == null || $company_name_2 == $company_name_1 || $company_name_2 == $company_name_3) {
            
        } else {
            $career_experience = new CareerExperience;
            $career_experience->application_id = $application->id;
            $career_experience->company_name = $company_name_2;
            $career_experience->position = $position_2;
            $career_experience->starting_date = $starting_date_2;
            $career_experience->end_date = $end_date_2;
            $career_experience->work_descreption = $work_descreption_2;
            $career_experience->leaving_reason = $leaving_reason_2;
            $career_experience->save();
        }


        // Make Data Career Skill Language from Form 
        if ($skilllanguage_id_2 == null || $skilllanguage_id_2 == $skilllanguage_id_1 || $skilllanguage_id_2 == $skilllanguage_id_3) {
            
        } else {
            $career_skilllanguage = new CareerSkilllanguage;
            $career_skilllanguage->application_id = $application->id;
            $career_skilllanguage->skilllanguage_id = $skilllanguage_id_2;
            $career_skilllanguage->option1 = $option1_2;
            $career_skilllanguage->option2 = $option2_2;
            $career_skilllanguage->option3 = $option3_2;
            $career_skilllanguage->save();
        }

        
    //For Third Opinion
        //Make Data Career Experience from Form 
        if ($company_name_3 == null || $company_name_3 == $company_name_1 || $company_name_3 == $company_name_2) {
            
        } else {
            $career_experience = new CareerExperience;
            $career_experience->application_id = $application->id;
            $career_experience->company_name = $company_name_3;
            $career_experience->position = $position_3;
            $career_experience->starting_date = $starting_date_3;
            $career_experience->end_date = $end_date_3;
            $career_experience->work_descreption = $work_descreption_3;
            $career_experience->leaving_reason = $leaving_reason_3;
            $career_experience->save();
        }

        // Make Data Career Skill Language from Form 
        if ($skilllanguage_id_3 == null || $skilllanguage_id_3 == $skilllanguage_id_1 || $skilllanguage_id_3 == $skilllanguage_id_2) {
            
        } else {
            $career_skilllanguage = new CareerSkilllanguage;
            $career_skilllanguage->application_id = $application->id;
            $career_skilllanguage->skilllanguage_id = $skilllanguage_id_3;
            $career_skilllanguage->option1 = $option1_3;
            $career_skilllanguage->option2 = $option2_3;
            $career_skilllanguage->option3 = $option3_3;
            $career_skilllanguage->save();
        }



        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

        $career_attachments = new CareerAttachments;
        $career_attachments->application_id = $application->id;
        $career_attachments->file_path = $nama_file;
        $career_attachments->save();

        return redirect('/')->with('alert-success', 'Form has been Submitted'); 
 
	}

}
