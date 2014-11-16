<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Bootstrap -->
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <!--  -->
      <form role="form" action ="register" method ="post">
        <div class="form-group">
          <label for="exampleInputusername">UserName</label>
          <input type="text" name ="username" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword">Password</label>
          <input type="password" name ="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputphone">Phone</label>
          <input type="text" name ="phone" class="form-control" placeholder="Phone">
        </div>
        <div class="form-group">
          <label for="exampleInputfacebook">Facebook</label>
          <input type="text" name ="facebook" class="form-control" placeholder="Facebook">
        </div>

        <input type="submit" class="btn btn-success"  value = "Submit"/>
      </form>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>