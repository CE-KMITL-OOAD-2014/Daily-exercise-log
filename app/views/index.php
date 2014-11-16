<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daily-Exercise</title>

  <!-- Bootstrap -->
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>


    <body>
      <!--
Sticky footer example by Mr. M. - Confederation College - IMD Program 

Based on tutorial from: http://www.coders-guide.com/watch.php?v=53
-->

<div class="navbar navbar-inverse navbar-static-top">

 <div class="container">
 <!-- Button to index -->
  <form class="navbar-form navbar-left" role="form" action ="index" method ="get">
    <!-- <a class="navbar-brand" action ="index" method ="get">Exercise</a> -->
    <input type="submit" class="btn btn-success"  value = "Daily Exercise"/>
  </form>

  <div class="collapse navbar-collapse navHeaderCollapse">
    <ul class="nav navbar-nav navbar-right">
      <!-- Log in -->
      <form class="navbar-form navbar-right" role="form" action ="login" method ="post" >
        <div class="form-group">
          <input type="text" placeholder="Name" class="form-control" required autofocus name ="username">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" class="form-control"required name ="password" >
        </div>
        <input type="submit" class="btn btn-success"  value = "Sign in"/>
      </form>

      <form class="navbar-form navbar-right" role="form" action ="register" method ="get">
        <input type="submit" class="btn btn-success"  value = "Register"/>
      </form>

    </ul>
  </div>
</div>
</div>




<div class="container">  


 <h2 style="color:Black" >Are you ready!!</h2>
 

 <section class="section-white">
  <div class="container">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active" >
          <center><img src= "image/1.jpg" ></center>
          <div class="carousel-caption">
            <FONT COLOR =black><h2>Exercise 1</h2></FONT>
          </div>
        </div>
        <div class="item">
          <center><img src="/image/2.jpg" ></center>
          <div class="carousel-caption">
            <FONT COLOR =black><h2>Exercise 2</h2></FONT>
          </div>
        </div>
        <div class="item" >
          <center><img src="/image/3.jpg" ></center>
          <div class="carousel-caption">
            <FONT COLOR =black><h2>Exercise 3</h2></FONT>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>