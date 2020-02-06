
	<?php

$uname = $_POST['uname'];
$uage = $_POST['uage'];
$ucontact = $_POST['ucontact'];
$uemail = $_POST['uemail'];
$id=$_GET['id'];


if (!empty($uname) || !empty($uage) ||  !empty($ucontact)  || !empty($uemail)) {
include 'config.php';

  $sql="UPDATE tutorials SET name = '$uname',age='$uage',contact='$ucontact',email='$uemail' WHERE id=$id;";
  if($conn->query($sql)){
    header("location:details.php");
  }
  else
  {
    echo "data updation fail";
  }
  }
 else {
 echo "All field are required";
}


 ?>

