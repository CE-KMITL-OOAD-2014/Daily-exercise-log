<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily-Exercise</title>

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
      <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" role="form">
        <fieldset>

          <!-- Form Name -->
          <legend>Edit Profile</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Phone</label>
            <div class="col-sm-10">
              <input type="text" placeholder="phone" class="form-control">
            </div>
          </div>

         <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Facebook</label>
            <div class="col-sm-10">
              <input type="text" placeholder="facebook" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div>

                  <form class="navbar-form navbar-left" role="form" action ="profile" method ="get">
                    <!-- <input type="submit" class="btn btn-success"  value = "Cancel"/> -->
                  </form>

                  <form class="navbar-form navbar-left" role="form" action ="profile" method ="get">
                    <input type="submit" class="btn btn-success"  value = "Save"/>
                  </form>

                <!-- <a type="submit" class="btn btn-primary" href = "Profile.php">Save</a> -->
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>