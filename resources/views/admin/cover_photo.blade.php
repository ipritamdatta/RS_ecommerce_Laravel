<?php
//session_start();
//if (!isset($_SESSION['username']))
    //header("Location: page-login.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ESEN Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('/')}}/css/style.css" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/custom.css" rel='stylesheet' type='text/css' />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('/')}}/js/jquery.min.js"></script>
    <script src="{{asset('/')}}/js/jquery-ui.min.js"></script>
    <script src="{{asset('/')}}/js/fwslider.js"></script>

</head>

<body>


<!-- <aside id="left-panel" class="left-panel">
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
                        <a href="admin.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Operations</h3>
                    <li class="active">
                        <a href="coverupdel.php"> <i class="menu-icon fa fa-gears"></i>Upload or Delete Cover Photo</a>
                    </li>
                    <li class="active">
                        <a href="#"> <i class="menu-icon fa fa-cloud-upload"></i>Upload Product</a>
                    </li>
                    <li class="active">
                        <a href="edit_delete.php"> <i class="menu-icon fa fa-trash-o"></i>Delete or Edit Product</a>
                    </li>
                     <li class="active">
                        <a href="comments.php"> <i class="menu-icon fa fa-comments"></i>Visitors Opinion</a>
                    </li>
                    <li class="active">
                        <a href="#"> <i class="menu-icon fa fa-edit"></i>Edit Username or Password</a>
                    </li>
                    <li class="active">
                        <a href="logout.php"> <i class="menu-icon fa fa-sign-out"></i>Log out</a>
                    </li>
                </ul>
            </div>
        </nav>
</aside> -->

    <div class="container-fluid">
        <form action="{{route('new-product')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <label for="image">Insert Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>

</body>

</html>
