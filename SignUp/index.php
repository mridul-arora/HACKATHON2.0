<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIGN UP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background-repeat: no-repeat;
        background-size: 1280px 700px;
        -webkit-appearance: none;
    }

    .error {
        color: #FF0000;
    }

    .form {
        width: 400px;
        height: 35px;
        border-radius: 20px;
        border: 2px solid #dcdbdb;
        padding: 20px;

    }

    textarea:focus,
    input:focus {
        outline: none;
    }


   /* ::-webkit-input-placeholder {

        opacity: 0.7;
    }*/

    .submit_center {
        margin-top: 50px;
        margin-left: 170px;
    }
     select:focus,
    option:focus {
        outline: none;
    }


</style>

<body>
    <?php
// define variables and set to empty values
$nameErr = $name1Err ="";
$Fname = $Lname ="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["Fname"]))
            {
                $nameErr = "Name is required";
            }
        else
            {
                $name = test_input($_POST["Fname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name))
                {
                $nameErr = "Only letters and white space allowed";
                }
            }
     }
  if ($_SERVER["REQUEST_METHOD"] == "POST")
       {
           if (empty($_POST["Lname"]))
               {
                    $name1Err = "Name is required";
                }
            else
              {
                    $name1 = test_input($_POST["Lname"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$name1))
                    {
                    $name1Err = "Only letters and white space allowed";
                    }
             }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-8">
                    <div style="margin-top:150px">
                        <p><span class="error">* required field.</span></p>
                        <form method="post" action="insert_signup.php">
                            <div class="form-group">
                                <label for="f_name"></label>
                                <input type="text" class="form" name="f_name" placeholder="First Name"><span class="error">* <?php echo $nameErr;?></span>
                            </div><br>
                            <div class="form-group">
                                <label for="l_name"></label>
                                <input type="text" class="form" name="l_name" placeholder="Last Name"><span class="error">* <?php echo $name1Err;?></span>
                            </div><br>
                            <div class="form-group">
                                <label for="phone_no"></label>
                                <input type="text" class="form" name="phone_no" placeholder="Phone No">
                            </div><br>
                             <select name="state"  style="border-radius:25px; height:40px ;border: 2px solid #dcdbdb;padding-left:35px;padding-right:35px;" placeholder="select state"><br>
                             <option value="1" style="opacity:0.7;">Select your state</option>
                             <option value="West Bengal">West Bengal</option>
                              </select><br>
                             <select name="district" style="border-radius:25px; height:40px ;border: 2px solid #dcdbdb;padding-left:35px;padding-right:35px;margin-top:40px;" placeholder="select state"><br>
                             <option value="1" style="opacity:0.7;">Select your district</option>
                             <option value="Asansol">Asansol</option>
                             <option value="barhampur">Barhampur</option>
                             <option value="Birbhum">Birbhum</option>
                             <option value="cooch behar">Cooch Behar</option>
                             <option value="malda">Malda</option>
                             <option value="durgapur">Durgapur</option>
                             <option value="siliguri">Siliguri</option>
                                 <option value="pandua">Pandua</option>
                                 <option value="samsi">Samsi</option>
                                 <option value="murshidabad">Murshidabad</option>
                                 <option value="howrah">Howrah</option>
                              </select><br>
                            <br>
                            <div class="submit_center">
                                <button type="sub" class="btn btn-primary" name="sub">Submit</button>
                            </div>
                        </form>
                        <div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>
</html>
