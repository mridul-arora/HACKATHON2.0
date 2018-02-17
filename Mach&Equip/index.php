<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../Assets/css/style.css"/>
 <meta charset="utf-8">
    <title>
    Machine & Equipments
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body {

        background-image:  url("../Assets/images/bcr.jpg");

    }

    .container-fluid {
        max-width: 1200px;
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

    }

    [class*="row"] {
        margin-bottom: 1em;
        justify-content: center;
    }

    [class*="col-"] {
        background: #efefef;
        border: 1px solid #ddd;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
    }
    a{
        color: black;

    }
    a:hover{
        color: black;
    }


</style>

<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="AboutUs/index.php">About Us</a></li>
             <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href=" ContactUs/index.php ">Contact Us</a></li>
        </ul>
    </div>
</nav>

    <div class="container-fluid">
        <div class="row">
            <div class="card-deck">
                <div class="card"><a href="thresher/index.php">
        <img class="card-img-top" src="../Assets/images/tt.jpg" alt="Card image cap">
        <div class="card-block">
          <CENTER><h4 class="card-title">THRESHER</h4></CENTER>
              </div>
                </a>
            </div>

            <div class="card"><a href="harvester/index.php">
                <img class="card-img-top" src="../Assets/images/ch.jpg" alt="Card image cap">
                <div class="card-block">
                    <CENTER>
                        <h4 class="card-title">COMBINE HARVESTER</h4>
                    </CENTER>
                  </div>
                </a>
            </div>

            <div class="card"><a href="conveyor/index.php">

                <img class="card-img-top" src="../Assets/images/vc.jpg" alt="Card image cap">
                <div class="card-block">
                    <CENTER>
                        <h4 class="card-title">VERTICAL CONVEYOR REAPER</h4>
                    </CENTER>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>


</body>

</html>
