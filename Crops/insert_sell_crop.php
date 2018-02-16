 <?php
$con=mysqli_connect("localhost","root","","agriculture");
    session_id("session2");
   session_start();
$no=$_SESSION['phone_no'];
$id=$_SESSION['user_id'];
if(isset($_POST['sub']))
{
   $a=$_POST['quantity'];
   $b=$_POST['price'];


     $query=mysqli_query($con,"INSERT INTO crop_seller (user_id,quantity,price)VALUES('$id','$a','$b')");
    echo "hello";

   }
?>
