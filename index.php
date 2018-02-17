<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="Assets/css/style.css" />
    <title>Agriculture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<Style>
    .navbar.navbar-default {
        margin-bottom: 0;
    }

    body {
        background-color: darkolivegreen;
    }

    .container-fluid {

    }

    header {
        background: #563d7c;
        padding: 2em 1em;
        color: #fff;
        margin-bottom: 2em;
        h1 {
            font-weight: 200;
        }
    }


    .minus {
        margin-top: -6vh;
        text-align: center;
    }
    .row img{
        width: 100%;
    }

</Style>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="AboutUs/index.php">About Us</a></li>
                <li><a href="SignUp/index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="SignIn/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href=" ContactUs/index.php ">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <!--carousel-->
    <div class="container-fluid">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="Assets/images/rrr.jpg" alt="Image cc" style="width:100%;">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="Assets/images/dd.jpg" alt="dd" style="width:100%;">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="Assets/images/gg.jpg" alt="gg" style="width:100%;">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>

                </div>
                <!--Left and right controls
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>-->
            </div>
        </div>
    </div>

   <div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="Weather/index.php">
          <img src="Assets/images/sky.jpg" alt="Lights">
          <div class="caption">
            <p>Weather Conditions</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="Crops/index.php">
          <img src="Assets/images/buycrops.jpg" alt="Fjords">
          <div class="caption">
            <p>Current Market Price</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="Mach&Equip/index.php">
          <img src="Assets/images/ch.jpg" alt="machines" >
          <div class="caption">
            <p>Machines & Equipments</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="Transport/index.php">
          <img src="Assets/images/12.jpg" alt="transport" >
          <div class="caption">
            <p>Transportation</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

</body>

</html>
