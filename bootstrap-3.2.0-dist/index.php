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
      <form class="navbar-form navbar-right" role="form" action ="home.php" >
        <div class="form-group">

          <input type="text" placeholder="Email" class="form-control" required autofocus>
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" class="form-control"required autofocus>
        </div>
        <input type="submit" class="btn btn-success"  value = "Sing in"/>
        <a type="button" class="btn btn-primary" href="register.php"  >Register</a>
      </form>


    </ul>
  </div>
</div>
</div>


<div class="container">

    <!-- 4:3 aspect ratio -->
      <div class="embed-responsive embed-responsive-4by3">
        <iframe class="embed-responsive-item" width="640" height="360" src="http://www.youtube-nocookie.com/embed/ZJ8Zdj0OPMI"  frameborder="0" allowfullscreen></iframe>
      </div>
</div>






          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
          <!-- Include all compiled plugins (below), or include individual files as needed -->
          <script src="js/bootstrap.min.js"></script>
        </body>
        </html>