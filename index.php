<?php include "Assets/parts/header.php";?>
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
        background: #eee
    }

    .container-fluid {
       /* max-width: 1200px;*/
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

    .card {
        background: #fff;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        img {
            width: 100%;
        }
    }

    [class*="row"] {
        margin-bottom: 1em;
        justify-content: center;
    }

    [class*="col-"] {
        background: #efefef;
        border: 1px solid #ddd;
        padding-top: .75rem;
        padding-bottom: .75rem;
        width: 100%;
    }

</Style>

<body>
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

    <!--<div class="container-fluid">
        <div class="row">
            <div class="card-deck">
                <div class="card"><a href="#">
        <img class="card-img-top" src="../Assets/images/tt.jpg" alt="Card image cap">
        <div class="card-block">
          <CENTER><h4 class="card-title">THRESHER</h4></CENTER>
              </div>
                </a>
            </div>
            <div class="card">
                <img class="card-img-top" src="../Assets/images/ch.jpg" alt="Card image cap">
                <div class="card-block">
                    <CENTER>
                        <h4 class="card-title">COMBINE HARVESTER</h4>
                    </CENTER>
                  </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="../Assets/images/vc.jpg" alt="Card image cap">
                <div class="card-block">
                    <CENTER>
                        <h4 class="card-title">VERTICAL CONVEYOR REAPER</h4>
                    </CENTER>

                    </div>
            </div>
        </div>
    </div>
    </div>
  <!-- <div class="container-fluid">

                    </div>-->

   <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-6 col-xs-12" style="margin:0px 0px;">
                <div class="well">
                    <div class="card-body"><a href="../HACKATHON2.0/Crops/index.php">Crops</a></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 col-xs-12" style="margin:30px 0px;">
                <div class="well">
                    <div class="card-body"><a href="Mach&Equip/index.php">Machines</a></div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6 col-xs-12" style="margin:30px 0px;">
                <div class="well">
                    <div class="card-body"><a href="../HACKATHON2.0/Weather/index.php">Weather</a></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 col-xs-12" style="margin:30px 0px;">
                <div class="well">
                    <div class="card-body"><a href="../HACKATHON2.0/Transport/index.php">Transport</a></div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6 col-xs-12" style="margin:30px 0px;">
                <div class="well">x
                    <div class="card-body"><a href="../HACKATHON2.0/Labour/index.php">Labour</a></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 col-xs-12" style="margin:30px 0px;">
                <div class="well">
                    <div class="card-body"><a href="../HACKATHON2.0/Water/index.php">Water</a></div>
                </div>

            </div>
        </div>
    </div>
    </body>
</html>
