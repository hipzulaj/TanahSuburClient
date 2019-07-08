<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Monitoring Keadaan Tanah">
    <meta name="theme-color" content="#2F3BA2" />
    <title>Tanah Subur - Atur Sensor</title>
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
                                <li><a href="{{url("/")}}">Home</a></li>
                                <li><span>Settings</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Disabled forms</h4>
                            <form action="{{url('settings/atursensor/tambahsensor/submit')}}" method="post">
                              {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="disabledTextInput">Nama Sensor</label>
                                    <input type="text" id="example-text-input" class="form-control" name="nama_sensor">
                                </div>
                                <div class="form-group">
                                    <label for="disabledTextInput">IP Address</label>
                                    <input type="text" id="example-text-input" class="form-control" name="ip_address" placeholder="Contoh : 192.168.1.200">
                                </div>
                                <div class="form-group">
                                <label for="disabledSelect">Nama Tanaman</label>
                                    <select name="nama_tanaman" id="disabledSelect" class="form-control">
                                      @foreach ($tanaman as $plant)
                                        <option value="{{$plant['nama_tanaman']}}">{{ $plant['nama_tanaman'] }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pl-4 pr-4">Submit</button>
                            </form>
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
    <!-- <script>
      var items = document.querySelectorAll("#list li");
      for(var i = 0; i < items.length; i++)
      {
          items[i].onclick = function(){
              document.getElementById("txt").value = this.innerHTML;
          };
      }
    </script> -->
</body>

</html>
