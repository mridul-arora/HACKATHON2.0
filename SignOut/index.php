<?php
session_id("session2");
session_start();
setcookie("PHPSESSID","","time()-1");
session_destroy();
header("Location: ../index.php");
?>
