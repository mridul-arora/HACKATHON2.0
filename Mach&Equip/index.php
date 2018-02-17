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
        background: #eee
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

    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

</style>

<body>
    <header role="banner">
        <center>
            <h1>FARMING MACHINES</h1>
        </center>

    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="card-deck">
                <div class="card"><a href="#">
        <img class="card-img-top" src="../Assets/images/tt.jpg" alt="Card image cap">
        <div class="card-block">
          <CENTER><h4 class="card-title">THRESHER</h4></CENTER>
          <!--<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
<center><a href="#" class="btn btn-primary">THRESHER</a></center>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                </div>
                </a>
            </div>
            <div class="card">
                <img class="card-img-top" src="../Assets/images/ch.jpg" alt="Card image cap">
                <div class="card-block">
                    <CENTER>
                        <h4 class="card-title">COMBINE HARVESTER</h4>
                    </CENTER>
                    <!--<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="../Assets/images/vc.jpg" alt="Card image cap">
                <div class="card-block">
                    <CENTER>
                        <h4 class="card-title">VERTICAL CONVEYOR REAPER</h4>
                    </CENTER>
                    <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
