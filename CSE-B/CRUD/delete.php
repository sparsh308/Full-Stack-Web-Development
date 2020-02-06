
<?php

$id = $_GET['id'];


if (!empty($id)){ 
include 'config.php';

  $sql=" delete from tutorials where id=$id";
  if($conn->query($sql)){
    header("location:details.php");
  }
  else
  {
    echo "data deletion fail";
  }
}
 else {
 echo "id not reached";
}


 ?>

