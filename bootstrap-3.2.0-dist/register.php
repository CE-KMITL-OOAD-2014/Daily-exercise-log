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
<div class="navbar navbar-inverse navbar-static-top">
 
 <div class="container">
 
 <a href="#" class="navbar-brand" >Daily Exercise</a> <button class="navbar-toggle"
      data-toggle="collapse" data-target=".navHeaderCollapse"></button>

      <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-right">
         
          <!-- 
          <li class="active"><a href="profile.php">Profile</a></li>
          <li class="active"><a href="#">Daily</a></li>
          <li class="active"><a href="#">Logout</a></li>  -->
  
        </ul>
      </div>
    </div>
</div>
<div class="container">
<div class="row">

  <form class="form-horizontal" action='' method="POST">
    <fieldset>
      <div id="legend">
       <legend class="">Register</legend>
      </div>
      <div class="control-group">
      <!-- Username -->
       <label class="control-label"  for="username">Username</label>
        <div class="controls">
         <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
         <p class="help-block">Username can contain any letters or numbers, without spaces</p>
        </div>
     </div>
 
      <div class="control-group">
        <!-- E-mail -->
       <label class="control-label" for="email">E-mail</label>
       <div class="controls">
         <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
          <p class="help-block">Please provide your E-mail</p>
        </div>
     </div>
 
     <div class="control-group">
       <!-- Password-->
        <label class="control-label" for="password">Password</label>
        <div class="controls">
          <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
         <p class="help-block">Password should be at least 4 characters</p>
        </div>
     </div>
 
     <div class="control-group">
       <!-- Password -->
       <label class="control-label"  for="password_confirm">Password (Confirm)</label>
       <div class="controls">
          <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
         <p class="help-block">Please confirm password</p>
       </div>
     </div>

      <div class="control-group">
        <!-- E-mail -->
       <label class="control-label" for="Age">Age</label>
       <div class="controls">
         <input type="text" id="Age" name="Age" placeholder="" class="input-xlarge">
          <p> </p>
        </div>
     </div>


      <div class="control-group">
        <!-- E-mail -->
       <label class="control-label" for="Work">Work</label>
       <div class="controls">

         <input type="text" id="Work" name="Work" placeholder="" class="input-xlarge" >
          <p> </p>
        </div>
     </div>

     


    

    
 
     <div class="control-group">
       <!-- Button -->
       <div class="controls">
          <button class="btn btn-success">Register</button>
       </div>
     </div>
    </fieldset>
  </form>
</div>
</div>






      

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

