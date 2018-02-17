<html lang="en">

<head>
    <title>Current Market Price</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

    <?php
        $con = mysqli_connect("localhost","root","","agriculture");
        $query1 = mysqli_query($con," SELECT * FROM crop_buyer ");

                                            while($row=mysqli_fetch_array($query1))
                                             {
                                      ?>
        <div class="well">
         <?php echo " Crop : "." $row[crop_name]<br>";?>
            <?php echo " Quantity : "." $row[quantity_buy]<br>";?>
            <?php echo " Price : "." $row[price_buy]<br>";?>
        </div>
        <?php
                 }
        ?>

</body>

</html>
