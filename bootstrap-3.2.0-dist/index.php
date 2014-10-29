<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <div class = "navbar navbar-inverse navbar-fixed-top" role="navigation">

       <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#index.php">Exercise</a>
        </div>


        <div class="navbar-collapse collapse">
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
        </div><!--/.navbar-collapse -->

        <br>

        
 <br>
          <div class="container-fluid">
            <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                      <div class="col-md-9">
                        <h2>Slide 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                      </div>
                    </div>
                  </div>            
                </div> 
                <div class="item">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                      <div class="col-md-9">
                        <h2>Slide 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                      </div>
                    </div>
                  </div>            
                </div> 
                <div class="item">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                      <div class="col-md-9">
                        <h2>Slide 4</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                      </div>
                    </div>
                  </div>           
                </div> 
                <div class="item">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                      <div class="col-md-9">
                        <h2>Slide 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                      </div>
                    </div>
                  </div>           
                </div> 
                <!-- End Item -->
              </div>
              <!-- End Carousel Inner -->
              <div class="controls">
                <ul class="nav">
                  <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img src="http://placehold.it/50x50"><small>Slide One</small></a></li>
                  <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img src="http://placehold.it/50x50"><small>Slide Two</small></a></li>
                  <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img src="http://placehold.it/50x50"><small>Slide Three</small></a></li>
                  <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><img src="http://placehold.it/50x50"><small>Slide Four</small></a></li>
                </ul>
              </div>
            </div>
            <!-- End Carousel -->
          </div>


          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
          <!-- Include all compiled plugins (below), or include individual files as needed -->
          <script src="js/bootstrap.min.js"></script>
        </body>
        </html>