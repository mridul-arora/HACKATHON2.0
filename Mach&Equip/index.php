<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
    <!--<header role="banner">
        <center>
            <h1>FARMING MACHINES</h1>
        </center>

    </header>
-->

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
