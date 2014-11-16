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

    <!-- Index after Login -->

    <body>
      <!--
Sticky footer example by Mr. M. - Confederation College - IMD Program 

Based on tutorial from: http://www.coders-guide.com/watch.php?v=53
-->
<div class="navbar navbar-inverse navbar-static-top">

  <div class="container">

    <form class="navbar-form navbar-left" role="form" action ="index2" method ="get">
      <input type="submit" class="btn btn-success"  value = "Daily Exercise"/>
    </form>

    <div class="collapse navbar-collapse navHeaderCollapse">
      <ul class="nav navbar-nav navbar-right">

        <form class="navbar-form navbar-right" role="form" action ="index" method ="get">
          <input type="submit" class="btn btn-success"  value = "Logout"/>
        </form>

        <form class="navbar-form navbar-right" role="form">
          <input type="submit" class="btn btn-success"  value = "{{Auth::user()->username}}"/>
        </form>

        <form class="navbar-form navbar-right" role="form" action ="profile" method ="post">
          <input type="submit" class="btn btn-success"  value = "Profile"/>
        </form>

        <form class="navbar-form navbar-right" role="form" action ="plan" method ="get">
          <input type="submit" class="btn btn-success"  value = "Plan"/>
        </form>

        <form class="navbar-form navbar-right" role="form" action ="viewcomment" method ="post">
          <input type="submit" class="btn btn-success"  value = "ViewComment"/>
        </form>

      </ul>
    </div>
  </div>
</div>

<!-- <div class="navbar navbar-inverse navbar-static-top">

 <div class="container">

      <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-right">

          @if(Auth::check())
            <form class="navbar-form navbar-right" role="form">
              <a href="profile">{{Auth::user()->username}}</a>&nbsp
              <font color="blue">|</font>&nbsp
              <a href="logout">Logout</a>
            </form>
            @else
              <form class="navbar-form navbar-right" role="form">
            </form>
          @endif

        </ul>
      </div>
    </div>
  </div> -->


<div class="container">  


 <h2 style="color:Black" >Are you ready</h2>
 

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
          <center><img src= "/image/1.jpg"></center>
          <div class="carousel-caption">
            <FONT COLOR =white><h2>Bird dog</h2></FONT>
          </div>
        </div>
        <div class="item">
          <center><img src="/image/2.jpg"></center>
          <div class="carousel-caption">
            <FONT COLOR =black><h2>Plank</h2></FONT>
          </div>
        </div>
        <div class="item" >
          <center><img src="/image/3.jpg"></center>
          <div class="carousel-caption">
            <FONT COLOR =black><h2>Side plank</h2></FONT>
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

      <!--<div class="well well-sm">
      <p>
          <span class="label label-warning">Important Note</span>
          <br>
              To see this working, <strong>you must open JUST the file without Bootsnip's "View full screen" feature </strong>.
          <br><br>
              <a href="http://bootsnipp.com/iframe/V24R" target="_blank">http://bootsnipp.com/iframe/V24R</a>
            </p>
          </div> -->


          <br>

        </br>


        <div class="container">

          <form class="navbar-form navbar-center" role="form" action ="exercise" method ="post">
            <input type="submit" class="btn btn-success"  value = "Exercise!"/>
          </form>

          <div class="row form-group product-chooser">

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="product-chooser-item selected">
                <img src="/image/4.jpg" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                </div>
                <div class="clear"></div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="product-chooser-item">
                <img src="/image/5.jpg" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                </div>
                <div class="clear"></div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="product-chooser-item">
                <img src="/image/6.jpg" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                </div>
                <div class="clear"></div>
              </div>
            </div>

          </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/bootstrap/js/bootstrap.min.js"></script>
      </body>
      </html>