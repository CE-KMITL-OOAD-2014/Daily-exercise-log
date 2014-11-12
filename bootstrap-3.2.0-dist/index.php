<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

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
 
 <a href="#" class="navbar-brand">Daily Exercise</a> <button class="navbar-toggle"
      data-toggle="collapse" data-target=".navHeaderCollapse"></button>

      <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-right" role="form" action ="Profile.php" >
            <div class="form-group">

              <input type="text" placeholder="Email" class="form-control" required autofocus>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control"required autofocus>
            </div>
            <input type="submit" class="btn btn-success"  value = "Sing in"/>
            <a type="button" class="btn btn-success" href="register.php" style="background-color:orange;" >Register</a>
          </form>
          <li class="active"><a href="#">Profile</a></li>

          <!--<li><a href="#">   </a></li>
          <li><a href="#">   </a></li> -->
  
        </ul>
      </div>
    </div>
  </div>
  



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
        <div class="item active">
          <img src= "p1.jpg" alt="...">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        <div class="item">
          <img src="p2.jpg" alt="...">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        <div class="item">
          <img src="p3" alt="...">
          <div class="carousel-caption">
            <h2>Heading</h2>
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
    <h2>Normal</h2>
    <div class="row form-group product-chooser">
    
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item selected">
          <img src="http://renswijnmalen.nl/bootstrap/desktop_mobile.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile and Desktop">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Mobile and Desktop</span>
            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
            <input type="radio" name="product" value="mobile_desktop" checked="checked">
          </div>
          <div class="clear"></div>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item">
          <img src="http://renswijnmalen.nl/bootstrap/desktop.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Desktop</span>
            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
            <input type="radio" name="product" value="desktop">
          </div>
          <div class="clear"></div>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item">
          <img src="http://renswijnmalen.nl/bootstrap/mobile.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Mobile</span>
            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
            <input type="radio" name="product" value="mobile">
          </div>
          <div class="clear"></div>
        </div>
      </div>
      
    </div>
</div>

<div class="container">

    <h2>Disabled</h2>
    <div class="row form-group product-chooser disabled">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item">
          <img src="http://renswijnmalen.nl/bootstrap/desktop_mobile.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile and Desktop">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Mobile and Desktop</span>
            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
            <input type="radio" name="product" value="mobile_desktop" checked="checked">
          </div>
          <div class="clear"></div>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item selected">
          <img src="http://renswijnmalen.nl/bootstrap/desktop.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Desktop</span>
            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
            <input type="radio" name="product" value="desktop">
          </div>
          <div class="clear"></div>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item">
          <img src="http://renswijnmalen.nl/bootstrap/mobile.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
            <span class="title">Mobile</span>
            <span class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
            <input type="radio" name="product" value="mobile">
          </div>
          <div class="clear"></div>
        </div>
      </div>
      
    </div>
</div>


  

  <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">© 2014 - Site Built By Mr. M.
           <a href="http://tinyurl.com/tbvalid" target="_blank" >HTML 5 Validation</a>
      </p>
      
      <a href="http://youtu.be/zJahlKPCL9g" class="navbar-btn btn-danger btn pull-right">
      <span class="glyphicon glyphicon-star"></span>  Subscribe on YouTube</a>
    </div>
    
    
  </div>



           



            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>