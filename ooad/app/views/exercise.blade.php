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

  <form class="navbar-form navbar-left" role="form" action ="index2" method ="get">
    <input type="submit" class="btn btn-success"  value = "Daily Exercise"/>
  </form>

  <div class="collapse navbar-collapse navHeaderCollapse">
    <ul class="nav navbar-nav navbar-right">

      <form class="navbar-form navbar-right" role="form" action ="plan" method ="get">
        <input type="submit" class="btn btn-success"  value = "Plan"/>
      </form>

      <form class="navbar-form navbar-right" role="form" action ="index" method ="get">
        <input type="submit" class="btn btn-success"  value = "Logout"/>
      </form>

      <form class="navbar-form navbar-right" role="form" action ="profile" method ="post">
        <input type="submit" class="btn btn-success"  value = "Profile"/>
      </form>

    </ul>
  </div>
</div>
</div>

<!-- Show Exercise -->
@for($i=0;$i<=8 ;$i++)
<div class="col-md-6 col-md-offset-3">
  <div>
    <img src= "/image/{{$id[$i]->image}}"><br>
    {{$id[$i]->id}}.
    {{$id[$i]->exercisename}}<br>
    {{$id[$i]->detail}}<br>
    แคลอรี่ที่ใช้ไป {{$id[$i]->calorie}}
  </div>
</div>
@endfor

</body>
</html>
