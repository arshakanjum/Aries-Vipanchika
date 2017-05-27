<?php   
  $x = $_POST['x'];
  $y = $_POST['Eid'];
  $T = $_POST['T'];
  $con = new mysqli("localhost","my_user","my_password",'events'); 
  if($T==0)
  $con->query("UPDATE eventlist SET P$x = NULL WHERE Eid=$y");           
	else
		$con->query("UPDATE sevent SET P$x = NULL WHERE Sid=$y");

?>