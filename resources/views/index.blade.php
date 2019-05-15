<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Monitoring Keadaan Tanah">
    <meta name="theme-color" content="#2F3BA2" />
    <title>srtdash - ICO Dashboard</title>
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
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
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
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                  <?php if($sensor['nilai'] <= 50){ ?>
                                    <div class="icon-no"><i class="fa fa-warning"></i></div>
                                  <?php }else{ ?>
                                    <div class="icon-yes"><i class="fas fa-check-circle"></i></div><?php }?>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h2 class="header-title mb-0">Total Nilai</h2>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
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
                            <div class="single-report mb-xs-30">
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
                                        <p><?php echo $sensor['time']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-report mb-xs-30">
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
                                        <p><?php echo $sensor['time']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 ">
                          <div class="single-report mb-xs-30">
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
                                      <p><?php echo $sensor['time']?></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 ">
                          <div class="single-report mb-xs-30">
                              <div class="s-report-inner pr--20 pt--30 mb-3">
                                <?php if($sensor['humid_status'] == 'Not OK'){ ?>
                                  <div class="icon-no"><i class="fa fa-warning"></i></div>
                                <?php }else{ ?>
                                  <div class="icon-yes"><i class="fas fa-check-circle"></i></div> <?php } ?>
                                  <div class="s-report-title d-flex justify-content-between">
                                      <h4 class="header-title mb-0">Sensor Kelembapan</h4>
                                  </div>
                                  <div class="d-flex justify-content-between pb-2">
                                      <h2><?php $humid = $sensor['humid']*100; echo $humid.'%'; ?></h2>
                                      <p><?php echo $sensor['time']?></p>
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
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="{{url('/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/metisMenu.min.js')}}"></script>
    <script src="{{url('js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{url('js/jquery.slicknav.min.js')}}"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{url('js/line-chart.js')}}"></script>
    <!-- all pie chart -->
    <script src="{{url('js/pie-chart.js')}}"></script>
    <!-- others plugins -->
    <script src="{{url('js/plugins.js')}}"></script>
    <script src="{{url('js/scripts.js')}}"></script>
</body>

</html>
