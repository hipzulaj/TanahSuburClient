<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Monitoring Keadaan Tanah">
    <meta name="theme-color" content="#2F3BA2" />
    <!-- CODELAB: Add iOS meta tags and icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Weather PWA">
    <link rel="apple-touch-icon" href="/images/icons/icon-152x152.png">
    <title>TanahSubur Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{url('images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/slicknav.min.css')}}">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{url('css/typography.css')}}">
    <link rel="stylesheet" href="{{url('css/default-css.css')}}">
    <link rel="stylesheet" href="{{url('css/styles.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{url('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <link rel="manifest" href="/manifest.json">
    <!--Carrousel -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><i class="ti-reload"></i></li>
                            <a href="{{url('settings')}}"><li class="settings-btn"><i class="ti-settings"></i></li></a>
                            <a href="{{url('logout')}}"><li><i class="ti-power-off"></i></li></a>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- sales report area start -->
                      <div class="sales-report-area mt-5">
                          <div class="row">
                              <div class="col-12">
                                <?php if($sensor['nilai'] <= '50'){ ?>
                                  <div class="single-report-nok mb-xs-30">
                                <?php }else if($sensor['nilai'] > '50' && $sensor['nilai'] <= '75'){ ?>
                                  <div class="single-report-pas mb-xs-30">
                                <?php }else{ ?>
                                  <div class="single-report-ok mb-xs-30"><?php } ?>
                                      <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <?php if($sensor['nilai'] <= '50'){ ?>
                                          <div class="icon-no"><i class="fa fa-warning"></i></div>
                                        <?php }elseif($sensor['nilai'] > '50' && $sensor['nilai'] <= '75'){ ?>
                                          <div class="icon-pas"><i class="fa fa-warning"></i></div>
                                        <?php }else{ ?>
                                          <div class="icon-yes"><i class="fas fa-check-circle"></i></div><?php }?>
                                          <div class="s-report-title d-flex justify-content-between">
                                            <?php if($sensor['nilai'] > '50' && $sensor['nilai'] <= '75'){ ?>
                                              <h4 class="header-title-pas mb-0">Total Nilai untuk tanaman <?php echo $sensor['tanaman']?></h2>
                                            <?php }else{?>
                                              <h4 class="header-title mb-0">Total Nilai untuk tanaman <?php echo $sensor['tanaman']?></h2><?php }?>
                                          </div>
                                        <?php if($sensor['nilai'] > '50' && $sensor['nilai'] <= '75'){ ?>
                                          <div class="d-flex-pas justify-content-between pb-2">
                                        <?php }else{?>
                                          <div class="d-flex justify-content-between pb-2"><?php }?>
                                              <h2><?php echo $sensor['nilai']?></h2>
                                              <p><?php echo $sensor['time']?></p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="sales-report-area mt-5 mb-5">
                          <div class="row">
                              <div class="col-md-6">
                                <?php if($sensor['ec_status'] == 'Not OK'){ ?>
                                  <div class="single-report-nok mb-xs-30">
                                <?php }else{ ?>
                                  <div class="single-report-ok mb-xs-30"><?php } ?>
                                      <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <?php if($sensor['ec_status'] == 'Not OK'){ ?>
                                          <div class="icon-no"><i class="fa fa-warning"></i></div>
                                        <?php }else{ ?>
                                          <div class="icon-yes"><i class="fas fa-check-circle"></i></div> <?php } ?>
                                          <div class="s-report-title d-flex justify-content-between">
                                              <h4 class="header-title mb-0">Sensor EC</h4>
                                          </div>
                                          <div class="d-flex justify-content-between pb-2">
                                              <h2><?php echo $sensor['ec']; ?></h2>
                                              <p>Nilai optimal <?php echo $sensor['batas_bawah_ec'].' - '.$sensor['batas_atas_ec']?></p>
                                              <p><?php echo $sensor['time']?></p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                <?php if($sensor['ph_status'] == 'Not OK'){ ?>
                                  <div class="single-report-nok mb-xs-30">
                                <?php }else{ ?>
                                  <div class="single-report-ok mb-xs-30"><?php } ?>
                                      <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <?php if($sensor['ph_status'] == 'Not OK'){ ?>
                                          <div class="icon-no"><i class="fa fa-warning"></i></div>
                                        <?php }else{ ?>
                                          <div class="icon-yes"><i class="fas fa-check-circle"></i></div> <?php } ?>
                                          <div class="s-report-title d-flex justify-content-between">
                                              <h4 class="header-title mb-0">Sensor pH</h4>
                                          </div>
                                          <div class="d-flex justify-content-between pb-2">
                                              <h2><?php echo $sensor['ph']; ?></h2>
                                              <p>Nilai optimal <?php echo $sensor['batas_bawah_ph'].' - '.$sensor['batas_atas_ph']?></p>
                                              <p><?php echo $sensor['time']?></p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 ">
                              <?php if($sensor['temp_status'] == 'Not OK'){ ?>
                                <div class="single-report-nok mb-xs-30">
                              <?php }else{ ?>
                                <div class="single-report-ok mb-xs-30"><?php } ?>
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                      <?php if($sensor['temp_status'] == 'Not OK'){ ?>
                                        <div class="icon-no"><i class="fa fa-warning"></i></div>
                                      <?php }else{ ?>
                                        <div class="icon-yes"><i class="fas fa-check-circle"></i></div> <?php } ?>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Sensor Temperatur</h4>
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <h2><?php echo $sensor['temp']; ?></h2>
                                            <p>Nilai optimal <?php echo $sensor['batas_bawah_temp'].' - '.$sensor['batas_atas_temp']?></p>
                                            <p><?php echo $sensor['time']?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                              <?php if($sensor['humid_status'] == 'Not OK'){ ?>
                                <div class="single-report-nok mb-xs-30">
                              <?php }else{ ?>
                                <div class="single-report-ok mb-xs-30"><?php } ?>
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                      <?php if($sensor['humid_status'] == 'Not OK'){ ?>
                                        <div class="icon-no"><i class="fa fa-warning"></i></div>
                                      <?php }else{ ?>
                                        <div class="icon-yes"><i class="fas fa-check-circle"></i></div> <?php } ?>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Sensor Kelembapan</h4>
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <h2><?php echo $sensor['humid']; ?></h2>
                                            <p>Nilai optimal <?php echo $sensor['batas_bawah_humid'].' - '.$sensor['batas_atas_humid']?></p>
                                            <p><?php echo $sensor['time']?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                <!-- sales report area end -->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="{{url('/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/metisMenu.min.js')}}"></script>
    <script src="{{url('js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{url('js/jquery.slicknav.min.js')}}"></script>

    <!-- others plugins -->
    <script src="{{url('js/plugins.js')}}"></script>
    <script src="{{url('js/scripts.js')}}"></script>

    <!-- test -->
    <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('/service-worker.js')
          .then((reg) => {
            console.log('Service worker registered.', reg);
          });
        });
      }
    </script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
      var OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "ad49c20e-4ff5-4a5f-b374-7404ce2cfde4",
        });
      });
    </script>
    <script type="text/javascript">
      OneSignal.push(function() {
  /* These examples are all valid */
      OneSignal.isPushNotificationsEnabled(function(isEnabled) {
        if (isEnabled)
          console.log("Push notifications are enabled!");
        else{
          console.log("Push notifications are not enabled yet.");    
          OneSignal.push(function() {
            OneSignal.showSlidedownPrompt();
          });
        }
      });
    });
    </script>
</body>

</html>
