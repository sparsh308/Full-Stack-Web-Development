
	<?php

$uname = $_POST['uname'];
$uage = $_POST['uage'];
$ucontact = $_POST['ucontact'];
$uemail = $_POST['uemail'];

if (!empty($uname) || !empty($uage) ||  !empty($ucontact)  || !empty($uemail)) {
include 'config.php';

  $sql="INSERT INTO tutorials(name,age,contact,email)values ('$uname','$uage','$ucontact','$uemail')";
  if($conn->query($sql)){
    header("location:details.php");
  }
  else
  {
    echo "data insertion fail";
  }
  }
 else {
 echo "All field are required";
}


 ?>

