<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>Career - Tradeasia International</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 

   <!-- Vendor CSS Files -->
   <link href="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/css/style.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/css/career.css" rel="stylesheet">

   <style>
     .error {
       color: #ff0000;
     }
  </style>
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" style="padding:0px">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a class="navbar-brand" href="/"><img class="ukuran" src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-warna.png" alt="Logo" style="width:180px"></a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/">{{ __('form.home') }}</a></li>
                <li><a href="/about-us">{{ __('form.about-us') }}</a></li>
                <li><a href="/vacancy">{{ __('form.vacancy') }}</a></li>
                <li><a href="/faq">{{ __('form.faq') }}</a></li>
                {{-- <li class="dropdown"><a href="#">{{ __('form.switch_language') }}<i class="bi bi-chevron-down"></i></a>
                  <ul>
                      <li><a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('localization.switch', 'en') }}">EN</a></li>
                      <li><a class="dropdown-item {{ app()->getLocale() == 'id' ? 'active' : '' }}" href="{{ route('localization.switch', 'id') }}">ID</a></li>
                  </ul>
                </li> --}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<!-- Section Jombotron -->
<section style="margin-top: 25px">
  <div class="container">
    <div class="jumbotron">
      <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{ __('form.form') }}</b></h2>
      <hr style="text-align:center;width:10%;border-top:5px solid #113c69">
    </div>
  </div>
</section>

<!-- Definition Section -->
<section style="margin: 20px 0px;padding: 20px 40px;">
  <div class="container">
    <p style="text-align:center">{{ __('form.apply') }}</p>
    <h4 style="font-family: GenghisKhan;color:#113c69;text-align:center"><b>{{$career_job->job_title}} - {{$career_job->career_category->category_name}}</b></h4>
    <h4 style="font-family: GenghisKhan;color:#113c69;text-align:center"><b>{{$country->country_name}}</b></h4>
    <hr>
  </div>
</section>

@if(\Session::has('alert'))
<div class="alert alert-danger">
    <div>{{Session::get('alert')}}</div>
</div>
@endif
@if(\Session::has('alert-success'))
<div class="alert alert-success">
    <div>{{Session::get('alert-success')}}</div>
</div>
@endif

<!-- Form Section 1 -->
<section style="margin: 20px 0px;padding: 20px 40px;">
  <form method="post" action="/form/proses" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="container" style="background-color:#eee;padding-top:10px">
    <h5 style="font-family: GenghisKhan;color:#113c69;"><b>{{ __('form.personal') }}</b></h5>
    <div class="row">
      {{-- Input Hidden --}}

      <select hidden  name="job_id" class="form-control">
        <option value={{$career_job->id}} name="job_id">A</option>
      </select>

      {{-- Real Input --}}
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="full_name" required="required" placeholder=" Full Name *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="email" required="required" placeholder=" Email *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="address" required="required" placeholder=" Address *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="zipcode" required="required" placeholder=" ZIP Code *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <select name="country_id_personal" class="form-control" required>
            <option value="">Country *</option>
            @foreach ($country_list as $id => $name_country)
                  <option value="{{ $id }}" name="country_id_personal">{{ $name_country }}</option>
            @endforeach 
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="city_personal" required="required" placeholder=" City *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="dob" placeholder="Date of Birth *" required="required" onfocus="(this.type='date')">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="number" class="form-control" name="phone" required="required" placeholder=" Phone *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px;display: flex;justify-content:between">
        <p style="margin:0px 10px">Gender * :</p>
        <input type="checkbox" style="margin:0px 10px" name="sex" value="0"><p>Male</p>
        <input type="checkbox" style="margin:0px 10px" name="sex" value="1"><p>Female</p>
      </div>
    </div>
  </div>
</section>

<!-- Form Section 2 -->
<section style="margin: 20px 0px;padding: 20px 40px;">
  <div class="container" style="background-color:#eee;padding-top:10px">
    <h5 style="font-family: GenghisKhan;color:#113c69;"><b>{{ __('form.education') }}</b></h5>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="institution_name" required="required" placeholder=" Institution Name *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <select name="status" class="form-control" required>
          <option value="">Status *</option>
          <option value="0" name="status">Graduate</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <select name="field_id" class="form-control" required>
            <option value="">Field *</option>
            @foreach ($field_list as $id => $field_title)
              <option value="{{ $id }}" name="field_id">{{ $field_title }}</option>
            @endforeach 
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <select name="degree_id" class="form-control" required>
            <option value="">Degree *</option>
            @foreach ($degree_list as $id => $degree_title)
              <option value="{{ $id }}" name="degree_id">{{ $degree_title }}</option>
            @endforeach 
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <select name="country_id_education" class="form-control" required>
            <option value="">Country *</option>
            @foreach ($country_list as $id => $name_country)
                  <option value="{{ $id }}" name="country_id_education">{{ $name_country }}</option>
            @endforeach 
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="city_education" required="required" placeholder=" City *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="number" class="form-control" name="start_year" required="required" placeholder=" Start Year *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="number" class="form-control" name="passing_year" required="required" placeholder=" Passing Year *">
      </div>
      <b style="margin:0px 15px">NB : Please Write in Last Your Eduation</b>
    </div>
  </div>
</section>

<!-- Form Section 3 -->

<!-- First Choose -->
<section style="margin: 20px 0px;padding: 20px 40px;">
  <div class="container" style="background-color:#eee;padding-top:10px">
    <div class="row">
        <div class="col-9">
            <h5 style="font-family: GenghisKhan;color:#113c69;"><b>{{ __('form.work') }}</b></h5>
        </div>
        <div class="col-3" style="text-align:right;margin-left: inherit;">
            <button type="button" class="btn btn-primary" onclick="show_work2()">+</button>
        </div> 
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="company_name_1" required="required" placeholder=" Company Name *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="position_1" required="required" placeholder=" Position *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="starting_date_1" required="required" placeholder="Starting Date *" onfocus="(this.type='date')">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="end_date_1" required="required" placeholder="End Date *" onfocus="(this.type='date')">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control"  name="work_descreption_1" required="required" placeholder=" Work Description *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="leaving_reason_1" required="required" placeholder=" Reason for Leaving *">
      </div>
    </div>
  </div>

<!-- Second Choose -->
  <div id="work2" class="container" style="background-color:#eee;padding-top:10px;display:none">
    <div class="row">
        <div class="col-9">
            <h5 style="font-family: GenghisKhan;color:#113c69;"><b>{{ __('form.work') }} 2</b></h5>
        </div>
        <div class="col-3" style="text-align:right;margin-left: inherit;">
            <button type="button" class="btn btn-primary" onclick="show_work3()">+</button>
            <button type="button" class="btn btn-primary" onclick="hide_work2()"><i class="bi bi-trash"></i></button>
        </div>
    </div>
    
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="company_name_2" placeholder=" Company Name *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="position_2" placeholder=" Position *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="starting_date_2" placeholder="Starting Date *" onfocus="(this.type='date')">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="end_date_2" placeholder="End Date *" onfocus="(this.type='date')">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="work_descreption_2" placeholder=" Work Description *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="leaving_reason_2" placeholder=" Reason for Leaving *">
      </div>
    </div>
  </div>

<!-- Third Choose -->
  <div id="work3" class="container" style="background-color:#eee;padding-top:10px;display:none">
    <div class="row">
        <div class="col-9">
            <h5 style="font-family: GenghisKhan;color:#113c69;"><b>{{ __('form.work') }} 3</b></h5>        
        </div>
        <div class="col-3" style="text-align:right;margin-left: inherit;">
            <button type="button" class="btn btn-primary" onclick="hide_work3()"><i class="bi bi-trash"></i></button>
        </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="company_name_3" placeholder=" Company Name *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="position_3" placeholder=" Position *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="starting_date_3" placeholder="Starting Date *" onfocus="(this.type='date')">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="end_date_3" placeholder="End Date *" onfocus="(this.type='date')">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="work_descreption_3" placeholder=" Work Description *">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px">
        <input type="text" class="form-control" name="leaving_reason_3" placeholder=" Reason for Leaving *">
      </div>
    </div>
  </div>
</section>



<!-- Form Section 3 -->

<!-- First Choose -->
<section style="margin: 20px 0px;padding: 20px 40px;">
  <div class="container" style="background-color:#eee;padding-top:10px">
    <div class="row">
        <div class="col-9">
            <h5 style="font-family: GenghisKhan;color:#113c69;"><b>{{ __('form.skill') }}</b></h5>        
        </div>
        <div class="col-3" style="text-align:right;margin-left: inherit;">
            <button type="button" class="btn btn-primary" onclick="show_language2()">+</button>
        </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="skilllanguage_id_1" class="form-control" required>
          <option value="">Skill Language *</option>
            @foreach ($language_list as $id => $language_title)
              <option value="{{ $id }}" name="skilllanguage_id_1">{{ $language_title }}</option>
            @endforeach 
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="option1_1" class="form-control" required>
          <option value="">Skill Read *</option>
          <option value="1" name="option1_1">1</option>
          <option value="2" name="option1_1">2</option>
          <option value="3" name="option1_1">3</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="option2_1" class="form-control" required>
          <option value="">Skill Write *</option>
          <option value="1" name="option2_1">1</option>
          <option value="2" name="option2_1">2</option>
          <option value="3" name="option2_1">3</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="option3_1" class="form-control" required>
          <option value="">Skill Speak *</option>
          <option value="1" name="option3_1">1</option>
          <option value="2" name="option3_1">2</option>
          <option value="3" name="option3_1">3</option>
        </select>
      </div>
    </div>
  </div>


<!-- Second Choose -->

  <div id="language2" class="container" style="background-color:#eee;padding-top:10px;display:none">
    <div class="row">
        <div class="col-9">
            <h5 style="font-family: GenghisKhan;color:#113c69;"><b>{{ __('form.skill') }} 2</b></h5>        
        </div>
        <div class="col-3" style="text-align:right;margin-left: inherit;">
            <button type="button" class="btn btn-primary" onclick="show_language3()">+</button>
            <button type="button" class="btn btn-primary" onclick="hide_language2()"><i class="bi bi-trash"></i></button>
        </div>  
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="skilllanguage_id_2" class="form-control">
          <option value="">Skill Language *</option>
            @foreach ($language_list as $id => $language_title)
              <option value="{{ $id }}" name="skilllanguage_id_2">{{ $language_title }}</option>
            @endforeach 
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="option1_2" class="form-control">
          <option value="">Skill Read *</option>
          <option value="1" name="option1_2">1</option>
          <option value="2" name="option1_2">2</option>
          <option value="3" name="option1_2">3</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="option2_2" class="form-control">
          <option value="">Skill Write *</option>
          <option value="1" name="option2_2">1</option>
          <option value="2" name="option2_2">2</option>
          <option value="3" name="option2_2">3</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="option3_2" class="form-control">
          <option value="">Skill Speak *</option>
          <option value="1" name="option3_2">1</option>
          <option value="2" name="option3_2">2</option>
          <option value="3" name="option3_2">3</option>
        </select>
      </div>
    </div>
  </div>


<!-- Third Choose -->

  <div id="language3" class="container" style="background-color:#eee;padding-top:10px;display:none">
      <div class="row">
        <div class="col-9">
            <h5 style="font-family: GenghisKhan;color:#113c69;"><b>{{ __('form.skill') }} 3</b></h5>        
        </div>
        <div class="col-3" style="text-align:right;margin-left: inherit;">
            <button type="button" class="btn btn-primary" onclick="hide_language3()"><i class="bi bi-trash"></i></button>
        </div> 
      </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="skilllanguage_id_3" class="form-control">
          <option value="">Skill Language *</option>
            @foreach ($language_list as $id => $language_title)
              <option value="{{ $id }}" name="skilllanguage_id_3">{{ $language_title }}</option>
            @endforeach 
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="option1_3" class="form-control">
          <option value="">Skill Read *</option>
          <option value="1" name="option1_3">1</option>
          <option value="2" name="option1_3">2</option>
          <option value="3" name="option1_3">3</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="option2_3" class="form-control">
          <option value="">Skill Write *</option>
          <option value="1" name="option2_3">1</option>
          <option value="2" name="option2_3">2</option>
          <option value="3" name="option2_3">3</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3" style="margin:10px 0px">
        <select name="option3_3" class="form-control">
          <option value="">Skill Speak *</option>
          <option value="1" name="option3_3">1</option>
          <option value="2" name="option3_3">2</option>
          <option value="3" name="option3_3">3</option>
        </select>
      </div>
    </div>
  </div>
</section>

<!-- Upload and Verification Section -->
<section style="margin: 20px 0px;padding: 20px 40px;">
  <div class="container" style="margin-bottom: 40px">
    <div style="display: flex; justify-content: between;margin:0px 10px">
      <input name="file" type="file" required="required">
      <p>* Resume (2MB Max) [.pdf]</p>
    </div>
    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
      <div class="col-md-12">
          {!! app('captcha')->display() !!}
          @if ($errors->has('g-recaptcha-response'))
              <span class="help-block text-danger">
                  <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
              </span>
          @endif
      </div>
    </div>
    <div style="display: flex; justify-content: between;margin:0px 10px">
      <input type="checkbox" style="margin-right:10px" name="read_flag" required="required" value="1">
      <p>I've Read and agree to the 
        <a href="#" data-toggle = "modal" data-target = "#privacy-policy">Privacy Policy</a> and 
        <a href="#" data-toggle = "modal" data-target = "#terms-conditions">Terms and Conditions</a></p>
    </div>
  </div>
</section>

<!-- Submit Section -->
<section style="margin: 20px 0px;padding: 20px 40px;">
  <div class="container">
    <center>
      <input type="submit" class="btn btn-submit" value="{{ __('form.apply-now') }}">
      {{-- <button type="submit" class="btn btn-submit">{{ __('form.apply-now') }}</button> --}}
    </center>
  </div>
</form>
</section>

  <!-- Footer Section-->
  <footer class="container-fluid container-xl d-flex align-items-center justify-content-between" style="margin-top:20px;">
    <div class="container-fluid">
      <div class="row" style="padding-top:10px">
        <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5" style="margin:10px 0px 0px 0px">
          <a href="#">
            <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-warna.png" alt="Logo" style="width:245px">
          </a>
        </div>
        <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7" style="margin:10px 0px 0px 0px">
          <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3" style="margin:5px 0px">
              <a href="/"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('form.home2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin:5px 0px">
              <a href="/about-us"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('form.about-us2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3" style="margin:5px 0px">
              <a href="/vacancy"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('form.vacancy2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2" style="margin:5px 0px">
              <a href="/faq"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('form.faq2') }}</h5></a>
            </div>
          </div>
          <div class="row" style="float:right">
            <div class="social-media">
              <a href="https://www.facebook.com/Tradeasia/">
                  <i class="fab fa-facebook fa-2x"></i>
              </a>
              <a href="https://twitter.com/TradeasiaInt">
                  <i class="fab fa-twitter fa-2x"></i>
              </a>
              <a href="https://www.pinterest.com/tradeasiaintern/">
                  <i class="fab fa-pinterest fa-2x"></i>
              </a>
              <a href="https://www.instagram.com/tradeasiaint/">
                  <i class="fab fa-instagram fa-2x"></i>
              </a>
              <a href="http://www.linkedin.com/company/tradeasia-international-pte-ltd">
                  <i class="fab fa-linkedin fa-2x"></i>
              </a>
              <a href="http://www.linkedin.com/company/tradeasia-international-pte-ltd">
                <i class="fab fa-youtube fa-2x"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding-top:10px">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="text-align: center;background-color:#113c69;color:white">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <a style="color:white" href="#">Cookie Policy</a> |
            <a style="color:white" href="#" data-toggle = "modal" data-target = "#privacy-policy">Privacy Policy</a> |
            <a style="color:white" href="#" data-toggle = "modal" data-target = "#terms-conditions">Terms and Conditions</a> |
            <a style="color:white" href="#">Sitemap</a>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
              Copyright <script>document.write(new Date().getFullYear())</script>
              <a style="color:white" href="http:/www.chemtradeasia.com/" target="_blank">Tradeasia International </a> | All Rights Reserved. Powered by
              <a style="color:white" href="http:/www.netpiper.com/">Netpiper </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal Privacy Policy -->
  @include('partial.privacy-policy')

  <!-- Modal Terms & Conditions -->
  @include('partial.terms-conditions')


  <!-- Bootstrap core JavaScript -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/vendor/fontawesome/fontawesome.js"></script>

  <!-- Template Main JS File -->
  <script src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/js/main.js"></script>

  {{-- <script>
  if ($("#careerForm").length > 0) {
    $("#careerForm").validate({
    rules : {
        full_name : {required:true},
        email : {email:true, required:true},
        city_personal : {required:true},
        address : {required:true},
        zipcode : {required:true},
        phone : {required:true},
        sex : {required:true},
        read_flag : {required:true},
        company_name_1 : {required:true},        
        institution_name : {required:true},
        degree_id : {required:true},
        field_id : {required:true},
        status : {required:true},
        option1_1 : {required:true},
        option2_1 : {required:true},
        option3_1 : {required:true},
    },
    messages : {
        full_name : {required: "Please Enter Valid Full Name"},
        email : {required: "Please Enter Valid Email"},
        city_personal : {required : "Please Enter Valid City"},
        address : {required: "Please Enter Valid Address"},
        zipcode : {required: "Please Enter Valid Zipcode"},
        phone : {required: "Please Enter Valid Phone"},
        sex : {required : "Please Chooose One"},
        company_name_1 : {required: "Please Enter Valid Company Name"},
        institution_name : {required: "Please Enter Institution Name"},
        status : {required: "Please Choose One"},
        option1_1 : {required: "Please Choose One"},
        option2_1 : {required: "Please Choose One"},
        option3_1 : {required: "Please Choose One"},

    },

    submitHandler:function(form) {
      $.ajaxSetup ({
        headers : {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $('#submit').html('Please Wait...');
      $("#submit"). attr("disable", true);
      $.ajax({
        url: "{{url('/form/proses')}}",
        type: "POST",
        data: $('#careerForm').serialize(),
        success:function(response){
          $('#submit').html('Submit');
          $("#submit"). attr("disable", false);
          window.location.href = "{{url('/')}}";
          alert('Form has been uploaded successfully');
          document.getElementById("careerForm").reset();
          }
        });
      }
    })
  }
  </script> --}}
  
<script>
function show_language2() {
  document.getElementById("language2").style.display = "block";
}
function hide_language2() {
  document.getElementById("language2").style.display = "none";
}
function show_language3() {
  document.getElementById("language3").style.display = "block";
}
function hide_language3() {
  document.getElementById("language3").style.display = "none";
}
function show_work2() {
  document.getElementById("work2").style.display = "block";
}
function hide_work2() {
  document.getElementById("work2").style.display = "none";
}
function show_work3() {
  document.getElementById("work3").style.display = "block";
}
function hide_work3() {
  document.getElementById("work3").style.display = "none";
}
</script>
</body>

</html>
