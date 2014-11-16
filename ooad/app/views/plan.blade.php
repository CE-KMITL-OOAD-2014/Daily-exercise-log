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

          <!-- <form class="navbar-form navbar-right" role="form" action ="plan" method ="get">
            <input type="submit" class="btn btn-success"  value = "Plan"/>
          </form> -->

            <form class="navbar-form navbar-right" role="form" action ="index" method ="get">
              <input type="submit" class="btn btn-success"  value = "Logout"/>
            </form>

            <form class="navbar-form navbar-right" role="form" action ="profile" method ="get">
              <input type="submit" class="btn btn-success"  value = "Profile"/>
            </form>

          <!--<li><a href="#">   </a></li>
          <li><a href="#">   </a></li> -->
  
        </ul>
      </div>
    </div>
  </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="product-chooser-item selected">
          <div class="form-group">
            <form class="navbar-form navbar-right" role="form" action ="/addplan" method ="post" >
              <div class="form-group">
                <input type="text" placeholder="Name" class="form-control" required autofocus name ="username">
              </div>
              <select class="form-control" name ="plan1">
                <option value="Bird dog" name ="plan1">Bird dog</option>
                <option value="Plank" name ="plan1">Plank</option>
                <option value="Side plank" name ="plan1">Side plank</option>
                <option value="Lying leg drop" name ="plan1">Lying leg drop</option>
                <option value="Push up" name ="plan1">Push up</option>
                <option value="One arm dumbbell row" name ="plan1">One arm dumbbell row</option>
                <option value="Shoulder Press" name ="plan1">Shoulder Press</option>
                <option value="Wall Squat" name ="plan1">Wall Squat</option>
                <option value="Crunch" name ="plan1">Crunch</option>
              </select>
              <select class="form-control" name ="plan2">
                <option value="Bird dog" name ="plan2">Bird dog</option>
                <option value="Plank" name ="plan2">Plank</option>
                <option value="Side plank" name ="plan2">Side plank</option>
                <option value="Lying leg drop" name ="plan2">Lying leg drop</option>
                <option value="Push up" name ="plan2">Push up</option>
                <option value="One arm dumbbell row" name ="plan2">One arm dumbbell row</option>
                <option value="Shoulder Press" name ="plan2">Shoulder Press</option>
                <option value="Wall Squat" name ="plan2">Wall Squat</option>
                <option value="Crunch" name ="plan2">Crunch</option>
              </select>
              <select class="form-control" name ="plan3">
                <option value="Bird dog" name ="plan3">Bird dog</option>
                <option value="Plank" name ="plan3">Plank</option>
                <option value="Side plank" name ="plan3">Side plank</option>
                <option value="Lying leg drop" name ="plan3">Lying leg drop</option>
                <option value="Push up" name ="plan3">Push up</option>
                <option value="One arm dumbbell row" name ="plan3">One arm dumbbell row</option>
                <option value="Shoulder Press" name ="plan3">Shoulder Press</option>
                <option value="Wall Squat" name ="plan3">Wall Squat</option>
                <option value="Crunch" name ="plan3">Crunch</option>
              </select>
              <select class="form-control" name ="plan4">
                <option value="Bird dog" name ="plan4">Bird dog</option>
                <option value="Plank" name ="plan4">Plank</option>
                <option value="Side plank" name ="plan4">Side plank</option>
                <option value="Lying leg drop" name ="plan4">Lying leg drop</option>
                <option value="Push up" name ="plan4">Push up</option>
                <option value="One arm dumbbell row" name ="plan4">One arm dumbbell row</option>
                <option value="Shoulder Press" name ="plan4">Shoulder Press</option>
                <option value="Wall Squat" name ="plan4">Wall Squat</option>
                <option value="Crunch" name ="plan4">Crunch</option>
              </select>
              <select class="form-control" name ="plan5">
                <option value="Bird dog" name ="plan5">Bird dog</option>
                <option value="Plank" name ="plan5">Plank</option>
                <option value="Side plank" name ="plan5">Side plank</option>
                <option value="Lying leg drop" name ="plan5">Lying leg drop</option>
                <option value="Push up" name ="plan5">Push up</option>
                <option value="One arm dumbbell row" name ="plan5">One arm dumbbell row</option>
                <option value="Shoulder Press" name ="plan5">Shoulder Press</option>
                <option value="Wall Squat" name ="plan5">Wall Squat</option>
                <option value="Crunch" name ="plan5">Crunch</option>
              </select>
              <input type="submit" class="btn btn-success"  value = "Enter"/>
            </form>
          </div>
        </div>
      </div>

 </body>
</html>
