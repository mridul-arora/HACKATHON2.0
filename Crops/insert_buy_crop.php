 <?php
$con=mysqli_connect("localhost","root","","agriculture");
    session_id("session2");
   session_start();
$no=$_SESSION['phone_no'];
$id=$_SESSION['user_id'];
if(isset($_POST['sub']))
{
    $c=$_POST['crop_name'];
   $a=$_POST['quantity'];
   $b=$_POST['price'];


     $query=mysqli_query($con,"INSERT INTO crop_buyer (user_id,quantity_buy,price_buy,crop_name)VALUES('$id','$a','$b','$c')");
    echo "hello";

   }
?>
