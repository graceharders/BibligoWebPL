<?php session_start(); ?>
<?php
unset($_SESSION['user']);
unset($_SESSION['pwd']);
echo "You are logged out";
?>
<br/>
<a href = "nBib.html"><button type = "button">Home</button></a>