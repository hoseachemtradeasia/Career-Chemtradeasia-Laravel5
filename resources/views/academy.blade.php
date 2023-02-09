<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Career - Tradeasia International</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 

   <!-- Vendor CSS Files -->
   <link href="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/css/style.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/css/career.css" rel="stylesheet">

</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" style="padding:0px">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a class="navbar-brand" href="/"><img class="ukuran" src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-warna.png" alt="Logo" style="width:180px"></a>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="/">{{ __('academy.home') }}</a></li>
                <li><a href="/about-us">{{ __('academy.about-us') }}</a></li>
                <li><a href="/vacancy">{{ __('academy.vacancy') }}</a></li>
                <li><a href="/faq">{{ __('academy.faq') }}</a></li>
                 {{-- <li class="dropdown"><a href="#">{{ __('academy.switch_language') }}<i class="bi bi-chevron-down"></i></a>
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
      <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>TRADEASIA ACADEMY</b></h2>
      <hr style="text-align:center;width:10%;border-top:5px solid #113c69">
    </div>
  </div>
</section>

<!-- Intro Section -->
<section style="padding:20px 0px">
  <div class="container">
       <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
            <h5 style="font-family: GenghisKhan;color:#113c69;"><b>Tradeasia Internship & Academy</b></h5>
            <hr style="width:10%;margin-left:0;border-top:5px solid #113c69">
            <p>{{ __('academy.academy') }}</p>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7" style="text-align: center;">
            <iframe class="youtube-mobile" width="560" height="315" src="https://www.youtube.com/embed/fX1DU9JmhcM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
       </div>
    </div>
 </section>

 <!-- Criteria Section -->
 <section style="padding:20px 0px">
  <div class="container">
       <div class="row">
          <div class="logo-criteria col-sm-4 col-md-4 col-lg-3 col-xl-3">
            <img style="width:100%;height:100%" class="ukuran" src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-criteria.JPG" alt="Logo Criteria">
          </div>
          <div class="col-sm-8 col-md-8 col-lg-9 col-xl-9">
            <h5 style="font-family: GenghisKhan;color:#113c69;"><b>{{ __('academy.criteria-0') }}</b></h5>
            <hr style="width:10%;margin-left:0;border-top:5px solid #113c69">
            <ul>
              <li>{{ __('academy.criteria-1') }}</li>
              <li>{{ __('academy.criteria-2') }} :</li>
                <ul>{{ __('academy.criteria-3') }}</ul>
                <ul>{{ __('academy.criteria-4') }}</ul>
                <ul>{{ __('academy.criteria-5') }}</ul>
                <ul>{{ __('academy.criteria-6') }}</ul>
              <li>{{ __('academy.criteria-7') }}</li>
              <li>{{ __('academy.criteria-8') }}</li>
          </div>
       </div>
    </div>
 </section>

 <!-- Benefit Section -->
<section style="padding:20px 0px">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h5 style="font-family: GenghisKhan;color:#113c69;text-align: center"><b>{{ __('academy.benefit-0') }}</b></h5>
        <hr style="width:10%;border-top:5px solid #113c69;text-align: center">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
        <p class="benefit" style="padding :15% 3%;">{{ __('academy.benefit-1') }}</p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
        <p class="benefit" style="padding :15% 3%;">{{ __('academy.benefit-2') }}</p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
        <p class="benefit" style="padding :20% 3%;">{{ __('academy.benefit-3') }}</p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
        <p class="benefit" style="padding :20% 3%;">{{ __('academy.benefit-4') }}</p>
      </div>
    </div>
 </div>
</section>

<!-- Interested Section --> 
<section style="margin: 20px 0px;padding: 20px 40px;">
  <div class="container">
    <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{ __('academy.interested-0') }}</b></h2>
    <div style="margin: 5% 0%;text-align:center">
      <a href="/form/1" class="btn btn-submit" style="width:135px">{{ __('academy.interested-1') }}</a>
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
              <a href="/"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('academy.home2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin:5px 0px">
              <a href="/about-us"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('academy.about-us2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3" style="margin:5px 0px">
              <a href="/vacancy"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('academy.vacancy2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2" style="margin:5px 0px">
              <a href="/faq"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('academy.faq2') }}</h5></a>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/vendor/fontawesome/fontawesome.js"></script>

   <!-- Template Main JS File -->
  <script src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/js/main.js"></script>
</body>

</html>
