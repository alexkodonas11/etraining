<?php

// Για την εύρεση της τρέχουσας σελίδας
// http://stackoverflow.com/questions/13336200/add-class-active-to-active-page-using-php 
$current=basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal e-Training</title>
    <link href="<?php echo Config::get('base_url');?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Config::get('base_url');?>assets/css/font-awesome.min.css" rel="stylesheet" >

    <link href="<?php echo Config::get('base_url');?>assets/css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo Config::get('base_url');?>assets/js/bootstrap.min.js"></script>
  </head>
  <body>
<section id="header">
<div class="container">
<div class="row">
<div class="col-xs-12">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Personal e-Training</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li <?php if ($current=="index" || $current=="") {echo "class='active'"; }?>><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li <?php if ($current=="courses") {echo "class='active'"; }?>><a href="courses.php">Courses</a></li>
        <li <?php if ($current=="trainers") {echo "class='active'"; }?>><a href="trainers.php">Trainers</a></li>
        
        <li id="my-account-menu" <?php if ($current=="my-account") {echo "class='active'"; }?>><a href="my-account.php">Ο λογαριασμός μου</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> 1 - υπηρεσία<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-cart" role="menu">
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img width="60" src="images/course1.jpg" alt="" />
                        <span class="item-info">
                            <span>Ενδυνάμωση</span>
                            <span>30€</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <li class="divider"></li>
              <li><a class="text-center" href="cart.php">Προβολή καλαθιού</a></li>
          </ul>
        </li>        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
</div>
</section>