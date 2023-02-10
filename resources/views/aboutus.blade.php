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

<body>

<!-- English Section -->

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" style="padding:0px">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a class="navbar-brand" href="/"><img class="ukuran" src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-warna.png" alt="Logo" style="width:180px"></a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/">{{ __('about-us.home') }}</a></li>
                <li><a href="/about-us">{{ __('about-us.about-us') }}</a></li>
                <li><a href="/vacancy">{{ __('about-us.vacancy') }}</a></li>
                <li><a href="/faq">{{ __('about-us.faq') }}</a></li>
                {{-- <li class="dropdown"><a href="#">{{ __('about-us.switch_language') }}<i class="bi bi-chevron-down"></i></a>
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
      <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;text-align:center"><b>{{ __('about-us.why-choose-us') }}</b></h2>
      <hr style="text-align:center;width:10%;border-top:5px solid #113c69">
    </div>
  </div>
</section>

<!-- Content -->
<section style="padding:0px">
    <div class ="container">
        <p style="text-align:justify";>Founded in 2004, Tradeasia International Pte. Ltd. is a privately owned, independent company headquartered in Singapore. We are a global trading organization providing integrated chemical procurement services with certainty and trust.</p>
        <p style="text-align:justify";>Commodity manufacturers are in need of raw materials for the production of industrial chemicals, which are usually not locally available. Big chemical manufacturers focus mainly on their production process and output. They distribute in bulk vessels and are sometimes not able to support commodity manufacturers for container loads. Additionally, some markets are difficult to penetrate owing to volume requirements and financing. In all we do, our goal is to support this process and build trusted relationships through client proximity, providing industry expertise to help our customers to meet their needs.</p>
        <p style="text-align:justify";>Our mission is to carry out chemical distribution services, especially to commodity industries in many parts of the world. Today, we are able to represent a constantly growing number of businesses that are serving a variety list of chemical product names and markets. Every month, we source and supply about 500-600 containers to our customers worldwide.</p>        
    </div>
</section>
<section style="padding:0px">
    <div class="container" style="width:100%">
        <!--<div class="row">
            <div class="col-xl-12">
                <div class="section-title" style="padding-top: 6%;">
                    <center>
                    <h2 style="font-family: GenghisKhan;font-size: 35px;color:#113c69;"><b>Why Choose Us</b></h2>
                    <hr style="text-align:center;width:10%;border-top:5px solid #113c69" />
                    </center>
                </div>
            </div>
        </div>-->

        <div class="row">
            <div class="column-value" style="background-color:#123C69">
                <div style="background:transparent;"><img align="left" alt="images" src="https://www.plastradeasia.com//view/themes/plastrad/images/6.png" style="margin-left:50px;margin:10px 20px 10px 20px;width: 100px;">
                    <h4 style="text-align:left;margin-top:25px;color:white;padding-right:5px"><b>Broad product portfolio</b></h4>
                    <p style="color:#123C69; padding:0px 10px 10px 10px; text-align: left;margin:0px;color:white">Our company gives you a wide selection of quality products to fulfill your raw-materials needs. We have hundreds products for you to choose</p>
                </div>
            </div>

            <div class="column-value">
                <div style="background:transparent;"><img align="left" alt="images" src="https://www.plastradeasia.com//view/themes/plastrad/images/7.png" style="margin-left:50px;margin:10px 20px 10px 20px;width: 100px;">
                    <h4 style="text-align:left;margin-top:25px;padding-right:5px"><b>A network of local offices</b></h4>
                    <p style="color:#123C69; padding:0px 10px 10px 10px; text-align: left;margin:0px">Our offices are spread around the globe, giving you easier access to do business with us</p>
                </div>
            </div>

            <div class="column-value" style="background-color:#123C69">
                <div style="background:transparent;"><img align="left" alt="images" src="https://www.plastradeasia.com//view/themes/plastrad/images/8.png" style="margin-left:50px;margin:10px 20px 10px 20px;width: 100px;">
                    <h4 style="text-align:left;margin-top:25px;color:white;padding-right:5px"><b>Systematization of trading and shipping process</b></h4>
                    <p style="color:#123C69; padding:0px 10px 10px 10px; text-align: left;margin:0px;color:white">As an integrited supply chain company, we give you our best service and help you track your shipped products until they reach your hands</p>
                </div>
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
              <a href="/"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('about-us.home2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin:5px 0px">
              <a href="/about-us"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('about-us.about-us2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3" style="margin:5px 0px">
              <a href="/vacancy"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('about-us.vacancy2') }}</h5></a>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2" style="margin:5px 0px">
              <a href="/faq"><h5 style="font-family: GenghisKhan;font-weight: 600;color:#113c69;text-align:center;float:right">{{ __('about-us.faq2') }}</h5></a>
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
