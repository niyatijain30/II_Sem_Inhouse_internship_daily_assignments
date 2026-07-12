<?php
session_start();

include('dashboardheader.php');

echo"Welcome, ".$_SESSION['user_name']. "!";
?>
<a href="updatepassword.php">Update password</a>

<?php
include('footer.php');
?>