<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>CU Graduation</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>/bootstrap/dashboard.css" rel="stylesheet"> 

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url();?>">CU Graduation</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!--
            <li><a href="#">Manage Admin Roles</a></li>
            <li><a href="#">My Profile</a></li>
            <li><a href="#">Logout</a></li>
          -->
          </ul>
          <!--
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li>XXX</li>
            <li><? echo anchor("timetable","Class for Register");?></li>
            <li><? echo anchor("timetable/add","Add Class");?></li>
            
          </ul>
          <ul class="nav nav-sidebar">
            <li><? echo anchor("student","Students");?></li>
            <li><? echo anchor("student/add","Add new student");?></li>
            <li><? echo anchor("enroll","Registration List");?></li>
            <li><? echo anchor("student/search/","Search Student");?></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><? echo anchor("selfie/table/".date("Y-m-d"),"Selfie Reservation Table");?></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          CONTENT
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url();?>/bootstrap/jquery-1.11.0.min.js"></script>
    <script src="<?=base_url();?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>/bootstrap/docs.min.js"></script>
  </body>
</html>