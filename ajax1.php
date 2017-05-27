<?php   
  $total = $_POST['total'];
  $Pid = $_POST['Eid'];
  $T = $_POST['T'];
  $S = $_POST['Slot'];
  $con = new mysqli("localhost","my_user","my_password",'events');
  if($T=='0')
  $con->query("UPDATE eventlist SET P$S = $total WHERE Eid=$Pid");      
  else
  $con->query("UPDATE sevent SET P$S = $total WHERE Sid=$Pid");         
?>