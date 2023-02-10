<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="https://cdn.chemtradeasia.com/favicon.ico" rel="shortcut icon">

  <title>Career - Tradeasia International</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 

   <!-- Vendor CSS Files -->
   <link href="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/css/style.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/css/career.css" rel="stylesheet">
   

</head>
<style>
  .infoDetail {
    z-index: 20;
    width: 40px;
    height: 40px;
    bottom: 15px;
    right: 10px;
    position: fixed;
    font-size: 1.7em;
    padding-top: 3px;
    text-align: center;
    color: #fff;
    background: #123c69;
  }
</style>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" style="padding:0px">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a class="navbar-brand" href="/"><img class="ukuran" src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-warna.png" alt="Logo" style="width:180px"></a>
        <nav id="navbar" class="navbar">
            <ul>
              <li><a href="/">{{ __('home.home') }}</a></li>
              <li><a href="/about-us">{{ __('home.about-us') }}</a></li>
              <li><a href="/vacancy">{{ __('home.vacancy') }}</a></li>
              <li><a href="/faq">{{ __('home.faq') }}</a></li>
                {{-- <li class="dropdown"><a href="#">{{ __('home.switch_language') }}<i class="bi bi-chevron-down"></i></a>
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
   
<section style="margin-top: 25px">
    <div class="top-banner" style="position:relative;color:white">
        <div class="top-banner-bg">
            <img class="banner-home" src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/Group 1-Career.png" sizes="(max-width: 768px) 360px, 1900px" alt="banner-home">
        </div>
        <div class="top-banner-content">
            <p class="top-banner-title">
              {{ __('home.banner') }}
            </p>
            <form action="/vacancy" method="GET">
            {{ csrf_field() }}
            <div class="row" style="justify-content: center;margin-bottom:5px">
              <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 form-group">
                  <div class="col-sm-12">
                    <select class="form-control" id="country_id" name="country_id">
                        <option value="">{{ __('vacancy.search-1') }}</option>
                        @foreach ($country_list as $id => $name_country)
                            <option value="{{ $id }}" id="country_id" name="country_id">{{ $name_country }}</option>
                        @endforeach
                    </select>
                  </div>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 form-group">
                  <div class="col-sm-12">
                    <select class="form-control" id="department_id" name="department_id">
                        <option value="">{{ __('vacancy.search-2') }}</option>
                        @foreach ($department_list as $id => $name_department)
                              <option value="{{ $id }}" id="department_id" name="department_id">{{ $name_department }}</option>
                        @endforeach 
                    </select>
                  </div>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 form-group">
                  <div class="col-sm-12">
                    <select class="form-control" id="level_id" name="level_id">
                        <option value="">{{ __('vacancy.search-3') }}</option>
                        @foreach ($category_list as $id => $name_category)
                            <option value="{{ $id }}" id="category_id" name="category_id">{{ $name_category }}</option>
                        @endforeach 
                    </select>
                  </div>
              </div>
            </div>
            <center>
              <input type="submit" class="btn btn-submit" id="submit" value="Search" style="width:90px">
            </center>
            </form>
        </div>
    </div>
</section>

<div class="container-fluid">
  <a href="#" data-toggle = "modal" data-target = "#info-detail" class="infoDetail"><i class="fas fa-info-circle"></i></a>
</div>

  <!-- About Tradeasia Section-->
  <section style="margin: 20px 0px;padding: 20px 40px;">
		<div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="text-align: center;">
               <img style="width:inherit" class="ukuran" src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/home1.JPG" alt="Home-1">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{ __('home.about-1') }}</b></h2>
              <hr style="text-align:center;width:10%;border-top:5px solid #113c69">
              <p>{{ __('home.about-2') }}</p>
            </div>
         </div>
      </div>
   </section>

  <!-- Our Offices Section -->
  <section style="margin: 20px 0px;padding: 20px 40px;">
    <div class="container">
      <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{ __('home.office') }}</b></h2>
      <hr style="text-align:center;width:10%;border-top:5px solid #113c69">
    </div>
    <div class="container">
      <div class="row" style="padding: 0% 10%">
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
          <div style="text-align: center">
            <a href="/vacancy?country_id=204&department_id=&category_id=">
              <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-singapura.JPG" alt="Office-Singapura">
            </a>
            <h6 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center">{{ __('home.country-1') }}</h6>
          </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
          <div style="text-align: center">
            <a href="/vacancy?country_id=105&department_id=&category_id=">
              <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-india.JPG" alt="Office-India">
            </a>
            <h6 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center">{{ __('home.country-2') }}</h6>
          </div>
        </div>
        
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
          <div style="text-align: center">
            <a href="/vacancy?country_id=106&department_id=&category_id=">
              <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-indonesia.JPG" alt="Office-Indonesia">
            </a>
            <h6 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center">{{ __('home.country-3') }}</h6>
          </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
          <div style="text-align: center">
            <a href="/vacancy?country_id=44&department_id=&category_id=">
              <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-china.JPG" alt="Office-China">
            </a>
            <h6 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center">{{ __('home.country-4') }}</h6>
          </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
          <div style="text-align: center">
            <a href="/vacancy?country_id=213&department_id=&category_id=">
              <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-srilanka.JPG" alt="Office-Srilanka">
            </a>
            <h6 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center">{{ __('home.country-5') }}</h6>
          </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
          <div style="text-align: center">
            <a href="/vacancy?country_id=243&department_id=&category_id=">
              <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-vietnam.JPG" alt="Office-Vietnam">
            </a>
            <h6 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center">{{ __('home.country-6') }}</h6>
          </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
          <div style="text-align: center">
            <a href="/vacancy?country_id=34&department_id=&category_id=">
              <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-myanmar.JPG" alt="Office-Myanmar">
            </a>
            <h6 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center">{{ __('home.country-7') }}</h6>
          </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
          <div style="text-align: center">
            <a href="/vacancy?country_id=236&department_id=&category_id=">
              <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-uae.JPG" alt="Office-UAE">
            </a>
            <h6 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center">{{ __('home.country-8') }}</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row" style="padding: 0% 15%">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <div style="text-align: center">
            <a href="/vacancy?country_id=125&department_id=&category_id=">
              <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-korea_selatan.JPG" alt="Office-KoreaSelatan">
            </a>
            <h6 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center">{{ __('home.country-9') }}</h6>
          </div>
        </div>
        
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <div style="text-align: center">
            <a href="/vacancy?country_id=224&department_id=&category_id=">
              <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-thailand.JPG" alt="Office-Thailand">
            </a>
            <h6 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center">{{ __('home.country-10') }}</h6>
          </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <div style="text-align: center">
            <a href="/vacancy?country_id=181&department_id=&category_id=">
              <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-filipina.JPG" alt="Office-Filipina">
            </a>
            <h6 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center">{{ __('home.country-11') }}</h6>
          </div>
        </div>
      </div>
		</div>
  </section>

  <!-- Life At Tradeasia Section -->
  <section style="margin: 20px 0px;padding: 20px 40px;">
    <div class="container">
      <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>#LifeAtTradeasia</b></h2>
      <hr style="text-align:center;width:10%;border-top:5px solid #113c69">
    </div>
    
    <div class="container">
      <div class="row" style="justify-content:center;">
        <div class="card" style="margin:10px 5px">
          <div style="text-align: center">
              <a href="https://cdn.chemtradeasia.com/career-photo/life-at-tradeasia-independence-day-of-indonesia2022(2).JPG"><img src="https://cdn.chemtradeasia.com/career-photo/life-at-tradeasia-independence-day-of-indonesia2022(2).webp" alt="Life-1" style="width: 100%;"></a>
          </div>
        </div>

        <div class="card" style="margin:10px 5px">
          <div style="text-align: center">
              <a href="https://cdn.chemtradeasia.com/career-photo/life-at-tradeasia-independence-day-of-indonesia2022.jpeg"><img src="https://cdn.chemtradeasia.com/career-photo/life-at-tradeasia-independence-day-of-indonesia2022.webp" alt="Life-2" style="width: 100%;"></a>
          </div>
        </div>

        <div class="card" style="margin:10px 5px">
          <div style="text-align: center">
            <a href="https://cdn.chemtradeasia.com/career-photo/life-at-tradeasia.birthday-celebration.png"><img src="https://cdn.chemtradeasia.com/career-photo/life-at-tradeasia.birthday-celebration.webp" alt="Life-3" style="width: 100%;"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="/academy"><img class="banner-home" src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/tradeasia-academy.JPG"></a>
          </div>
          <div class="carousel-item">
            <a href="/academy"><img class="banner-home" src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/tradeasia-academy.JPG"></a>
          </div>
          <div class="carousel-item">
            <a href="/academy"><img class="banner-home" src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/tradeasia-academy.JPG"></a>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Recruitment Process Section -->
  <section style="margin: 20px 0px;padding: 20px 40px;">
    <div class="container">
      <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{ __('home.recruitment-0') }}</b></h2>
      <hr style="text-align:center;width:10%;border-top:5px solid #113c69">
    </div>

    <div class="container">
      <div class="row" style="justify-content:center;margin-bottom: 20px;">
        <div class="card" style="margin:10px 20px;border: 2px solid black;padding:5px">
          <div style="text-align: center;width: 125px;">
            <p style="border:1px solid black;margin:0% 35%;border-radius:50%">1</p>
            <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-recruit-1.JPG" alt="Life-1">
            <p class="card-text">{{ __('home.recruitment-1') }}</p>
          </div>
        </div>

        <div class="card" style="margin:10px 20px;border: 2px solid black;padding:5px">
          <div style="text-align: center;width: 125px;">
            <p style="border:1px solid black;margin:0% 35%;border-radius:50%">2</p>
            <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-recruit-2.JPG" alt="Life-2">
            <p class="card-text">{{ __('home.recruitment-2') }}</p>
          </div>
        </div>

        <div class="card" style="margin:10px 20px;border: 2px solid black;padding:5px">
          <div style="text-align: center;width: 125px;">
            <p style="border:1px solid black;margin:0% 35%;border-radius:50%">3</p>
            <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-recruit-3.JPG" alt="Life-3">
            <p class="card-text">{{ __('home.recruitment-3') }}</p>
          </div>
        </div>

        <div class="card" style="margin:10px 20px;border: 2px solid black;padding:5px">
          <div style="text-align: center;width: 125px;">
            <p style="border:1px solid black;margin:0% 35%;border-radius:50%">4</p>
            <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-recruit-2.JPG" alt="Life-2">
            <p class="card-text">{{ __('home.recruitment-4') }}</p>
          </div>
        </div>

        <div class="card" style="margin:10px 20px;border: 2px solid black;padding:5px">
          <div style="text-align: center;width: 125px;">
            <p style="border:1px solid black;margin:0% 35%;border-radius:50%">5</p>
            <img src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-recruit-2.JPG" alt="Life-2">
            <p class="card-text">{{ __('home.recruitment-5') }}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="join-us">
        <div class="top-banner-content">
          <center>
              <a href="/vacancy" class="btn btn-submit" style="width:135px">{{ __('home.apply-now') }}</a>
          </center>
        </div>
      </div>
    </div>
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
              <a href="/"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('home.home2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin:5px 0px">
              <a href="/about-us"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('home.about-us2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3" style="margin:5px 0px">
              <a href="/vacancy"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('home.vacancy2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2" style="margin:5px 0px">
              <a href="/faq"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('home.faq2') }}</h5></a>
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

  <!-- Modal Info Detail -->
  @include('partial.info-detail')

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/vendor/fontawesome/fontawesome.js"></script>

   <!-- Template Main JS File -->
  <script src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/js/main.js"></script>
</body>

</html>
