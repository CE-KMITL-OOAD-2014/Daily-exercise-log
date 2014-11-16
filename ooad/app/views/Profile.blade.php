<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>

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
      <div class="container">
        <div class="row">
          <div class="col-md-5  toppad  pull-right col-md-offset-3 ">

            <form class="navbar-form navbar-right" role="form" action ="index2" method ="get">
              <input type="submit" class="btn btn-success"  value = "Daily Exercise"/>
            </form>

          <!-- <form class="navbar-form navbar-right" role="form" action ="editprofile" method ="get">
            <input type="submit" class="btn btn-success"  value = "Edit Profile"/>
          </form> -->

          <br>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Profile</h3>
            </div>
            <div class="panel-body">
              <div class="row">

                <div class=" col-md-15 col-lg-15 "> 
                  <table class="table table-user-information">
                    <tbody>

                      <tr>
                        <td>Name :</td>
                        <td>@if(Auth::check())
                                {{Auth::user()->username}}
                            @endif
                        </td>
                      </tr>

                      <tr>
                        <td>Phone :</td>
                        <td>@if(Auth::check())
                                {{Auth::user()->phone}}
                            @endif
                        </td>
                      </tr>


                      <tr>
                        <td>Facebook</td>
                        <td>@if(Auth::check())
                                {{Auth::user()->facebook}}
                            @endif
                        </td>
                      </tr>




                    </tbody>
                  </table>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="product-chooser-item selected">

@for($i=0 ;$i<count($id3);$i++)
<div class="col-md-6 col-md-offset-3">
  <div>
    Name : {{$id3[$i]->username}}<br>
    Comment : {{$id3[$i]->comment}}
  </div>
</div>
@endfor

      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>