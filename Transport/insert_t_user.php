 <?php
$con=mysqli_connect("localhost","root","","agriculture");
if(isset($_POST['sub']))
{
   $a=$_POST['wt'];
   $b=$_POST['dist'];
   $g=$_POST['time'];
   $c=$_POST['price'];
            $query=mysqli_query($con,"INSERT INTO t_user (wt,dist,price,time)VALUES('$a','$b','$g','$c')");
                 if($query)
                         {
                            header("Location:transport_user.php");
                          }

   }
?>
