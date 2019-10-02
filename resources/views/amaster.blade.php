<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RS Admin Panel</title>
    <link rel="icon" type="image/ico" href="{{asset('/')}}images/tlogo.png" />
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">   
    <link rel="stylesheet" href="{{asset('/')}}vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
	<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <h2 class="navbar-brand" href="./">Admin Panel</h2>
                <h2 class="navbar-brand hidden" href="./">AP</h2>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('home')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Operations</h3>
                    <li class="active">
                        <a href="{{route('coverupdel')}}"> <i class="menu-icon fa fa-gears"></i>Cover Photo</a>
                    </li>

                    <li class="active">
                        <a href="{{route('category')}}"> <i class="menu-icon fa fa-gears"></i>Categories</a>
                    </li>
                    
                    <li class="active">
                        <a href="{{route('productupdel')}}"> <i class="menu-icon fa fa-gears"></i>Products</a>
                    </li>
                    <li class="active">
                        <a href="{{route('storeEditdel')}}"> <i class="menu-icon fa fa-gears"></i>Locations</a>
                    </li>
                    <li class="active">
                        <a href="{{route('upabout')}}"> <i class="menu-icon fa fa-gears"></i>Company Information</a>
                    </li>
                    <li class="active">
                        <a href="{{route('jobEditdel')}}"> <i class="menu-icon fa fa-gears"></i>Manage Career</a>
                    </li>
                    <li class="active">
                        <a href="{{route('applicant-list')}}"> <i class="menu-icon fa fa-user"></i>See All Applicants</a>
                    </li>
                     <li class="active">
                        <a href="{{route('comments')}}"> <i class="menu-icon fa fa-comments"></i>Visitors Opinion</a>
                    </li>
                    <li class="active">
                        <a href="{{route('changePassword')}}"> <i class="menu-icon fa fa-edit"></i>Edit Password</a>
                    </li>
                    <li class="active">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="menu-icon fa fa-sign-out"></i>
                            {{ __('Logout') }}
                        </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> 
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="float-right">
                    <!-- <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a> -->
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                </div>
            </div>

        </header>
    @yield('body')
</body>
</html>