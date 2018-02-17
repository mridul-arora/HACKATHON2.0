<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../Assets/css/style.css" />
    <title>AD FARM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<style>
    select:focus,
    option:focus {
        outline: none;
    }
input:focus,
    text:focus {
        outline: none;
    }
    body {
        background-image: url("../Assets/images/buycrops.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .crop_name {
        border-radius: 25px;
        height: 40px;
        width: 18vw;
        border: 2px solid #dcdbdb;
        padding-left: 35px;
        padding-right: 35px;
        margin-top: 40px;
        text-align: center;
         box-shadow: grey 0px 2px 0px 1px;
    }

    .form {
         box-shadow: grey 0px 2px 0px 1px;
        border-radius: 25px;
        height: 2.5em;
        width: 18vw;
        border: 2px solid #dcdbdb;
        padding-left: 35px;
        padding-right: 35px;
        text-align: center;
        font-size: 2.5vh;
        margin-top: 1vh;
    }

    .sub1 {
         box-shadow: #331a00 0px 2px 0px 1px;
        width:18vw;
        height:auto;
        margin-top: 1vh;
        border-radius: 25px;
        background-color:  #331a00;
        color:white;
    }
    .sub{
        margin-top: 1vh;
        width:18vw;
        box-shadow: #331a00 0px 2px 0px 1px;
        border-radius: 25px;
        background-color:  #331a00;
        color:white;
    }

    .row{
        text-align: center;
        vertical-align: middle;

    }
    .options{

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
    <?php
// define variables and set to empty valuesS
$quanErr = $pricErr ="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["quantity"]))
            {
                $nameErr = "quantity is required";
            }
        else
            {
                $name = test_input($_POST["quantity"]);
                // check if name only contains letters and whitespace.
                if (!preg_match("/^[0-9 ]*$/",$name))
                {
                $nameErr = "Only digits allowed";
                }
            }
     }
?>
        <div class="container">
            <form method="POST" action="insert_buy_crop.php">
                <div class="row">
                    <select name="crop_name" class="crop_name" placeholder="select crop">
                             <div class="options">
                                  <option value="1">Select your crop</option>
                             <option value="Wheat">Wheat</option>
                             <option value="Rice">Rice</option>
                             <option value="Potato">Potato</option>
                             <option value="Brinjal">Brinjal</option>
                             <option value="Cabbage">Cabbage</option>
                             <option value="Black gram">Black gram</option>
                                 </div>
            </select><br>
                </div><br>
                <div class="row">
                    <div class="form-group">
                        <label for="quantity"></label>
                        <input type="text" class="form" name="quantity" placeholder="Quantity in kg">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="price"></label>
                        <input type="text" class="form" name="price" placeholder="price per kg">
                    </div>
                </div><br><br><br>
                <div class="row">
                    <div class="submit_center">
                        <button type="sub" class="btn sub" name="sub">Submit</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <form action="search_wheat_sell.php">
                    <button type="sub" class="btn sub1" name="sub1" style="float:right;margin-top:100px;">Search for buyers</button>
                </form>
            </div>

        </div>
</body>

</html>
