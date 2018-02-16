<html lang="en">
<head>
  <title>AD FARM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    <?php
// define variables and set to empty values
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
                // check if name only contains letters and whitespace
                if (!preg_match("/^[0-9 ]*$/",$name))
                {
                $nameErr = "Only digits allowed";
                }
            }
     }
?>

    <form method="post" action="insert_sell_crop.php">
                        <div class="form-group">
                                <label for="quantity"></label>
                                <input type="text" class="form" name="quantity" placeholder="Quantity in kg">
                            </div><br>
                                   <div class="form-group">
                                <label for="price"></label>
                                <input type="text" class="form" name="price" placeholder="price per kg">
                            </div><br>

    <div class="submit_center">
        <button type="sub" class="btn btn-primary" name="sub">Submit</button>
    </div>
         </form>
    </body>
</html>
