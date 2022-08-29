



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{asset('front/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <link
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">

   <link href="{{asset('front/css/sb-admin-2.min.css')}}" rel="stylesheet" type="text/css">



  <style>

	img {
    vertical-align: super;
    border-style: none;
}
.bg-gradient-primary {
    background-color: #2e4d70;
    background-image: linear-gradient(
313deg
,#2d4b6c 10%,#597ad9 100%);
    background-size: cover;
}
.form-style{
    background: #dfb3ad00;
    box-shadow: 0px 1px 20px 0px rgb(70 102 170 / 55%);
    color: #4363a3;
    padding: 10px;
}
  </style>
      <script type="text/javascript"  src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('front/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('front/js/sb-admin-2.min.js')}}"></script>
</head>
<body>
    @include('sweetalert::alert')
<div id="wrapper">
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('Dashboard.index')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    	<img class="Logo" src="{{asset($setting->Logo)}}" alt="logo"style="
    max-width: 40px;
">
                </div>
                <div class="sidebar-brand-text mx-3">Mnfrid </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                settings Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseservices"
                    aria-expanded="true" aria-controls="collapseservices">
                    <i class="fas fa-fw fa-folder"></i>
               <span>services page</span>
                </a>
                <div id="collapseservices" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sistting services</h6>
						<a class="collapse-item" href="{{route('Dashboard.addservices')}}">Add services</a>
                        <a class="collapse-item" href="update_services.php">Update services</a>


                    </div>
                </div>
				</li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepro"
                    aria-expanded="true" aria-controls="collapsepro">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>portfolios page</span>
                </a>
                <div id="collapsepro" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Settings portfolios</h6>
						<a class="collapse-item" href="{{route('Dashboard.addprotfolio')}}">Add portfolios</a>
                        <a class="collapse-item" href="{{route('Dashboard.addsubpor')}}">Add sub portfolios</a>
                        <a class="collapse-item" href="{{route('Dashboard.additems')}}">Add Items</a>
                        <a class="collapse-item" href="update_portfolio.php">Update portfolios</a>


                    </div>
                </div>
            </li>

            <!-- Divider -->



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseworkwith"
                    aria-expanded="true" aria-controls="collapseworkwith">
                    <i class="fas fa-fw fa-folder"></i>
               <span>worked with page</span>
                </a>
                <div id="collapseworkwith" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">settings worked with</h6>
						<a class="collapse-item" href="{{route('Dashboard.addworkwith')}}">Add worked with</a>
                        <a class="collapse-item" href="update_workwith.php">Update worked with</a>


                    </div>
                </div>
				</li>

            <!-- Nav Item - Charts -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                settings website
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#website"
                    aria-expanded="true" aria-controls="website">
                    <i class="fas fa-fw fa-folder"></i>
               <span>layout settings </span>
                </a>
                <div id="website" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="{{route('Dashboard.settingswebsite')}}">Main settings</a>
                        <a class="collapse-item" href="{{route('Dashboard.settingindexpage')}}">index page settings</a>
                        <a class="collapse-item" href="{{route('Dashboard.settingcontactpage')}}">contact page settings</a>
                        <a class="collapse-item" href="{{route('Dashboard.settingaboutpage')}}">about page settings</a>
                        <a class="collapse-item" href="{{route('Dashboard.settingservicespage')}}">services page settings</a>
                        <a class="collapse-item" href="{{route('Dashboard.settingportofliopage')}}">portoflio page settings</a>
                    </div>

                </div>
				</li>
            <!-- Sidebar Toggler (Sidebar) -->


        </ul>
		     <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                      <li class="nav-item  no-arrow mx-1"style=" margin: 25px;">
                        </li>

                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ __('Dashboard') }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('/front/images/backgrounds/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

@yield('containt')
     </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Mnfrid 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
</div>


<!-- Scripts -->



</body>
</html>
