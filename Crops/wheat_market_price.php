<html lang="en">

<head>
    <title>Current Market Price</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/style.css"/>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <style>
        body{
            background-image: url("../Assets/images/wheatwall.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .well{
            margin-left: 3vw;
            width:30vw;
            height:auto;
            text-align: center;
           box-shadow: 0px 5px 0px 3px;
            opacity:0.7;
           font-weight: 1000;
            border: bold 2px;
            text-decoration: none;
            border-radius: 25px;
            margin-bottom: 2vh;
        }
        .well:hover{
         margin-left: 3vw;
            width:30vw;
            height:auto;
            text-align: center;
           box-shadow: 0px 5px 0px 3px;
            opacity:1;
           font-weight: 1000;
            border: bold 5px;
            text-decoration: none;
            border-radius: 25px;
        }
    </style>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../AboutUs/index.php">About Us</a></li>
             <li><a href="../SignUp/index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="../SignIn/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="../ContactUs/index.php">Contact Us</a></li>
        </ul>
    </div>
</nav>

    <?php
        $con = mysqli_connect("localhost","root","","agriculture");
        $query1 = mysqli_query($con," SELECT * FROM wheat_mp ");

                                            while($row=mysqli_fetch_array($query1))
                                             {
    ?>

        <div class="well">
            <?php echo " District name : "." $row[dist_name]<br>";?>
            <?php echo " Mandi name : "." $row[mandi_name]<br>";?>
            <?php echo " Market price : "." $row[mp]<br>";?>
        </div>

        <?php
             }
        ?>

</body>

</html>
