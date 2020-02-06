

<!DOCTYPE html>
<html>
<head>
<title>Welcome to insert details</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php

$id = $_GET['id'];

if (!empty($id)){ 
include 'config.php';

  $sql =  "SELECT * FROM tutorials where id=$id";
   $result=mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result);
   if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
 }
 ?>
<form action="update.php?id=<?php echo $id; ?>" method="POST">

   <label for="uname"><b>Name</b></label>
   <input type="text" value="<?php echo $row['name']; ?>" name="uname" required id="idname"><br>
     
     <label for="uage"><b>Age</b></label>
     <input type="Age" value="<?php echo $row['age']; ?>" name="uage" required id="idage"><br>


    <label for="uncontact"><b>Contact</b></label>
    <input type="number" value="<?php echo $row['contact']; ?>" name="ucontact" required id="idcontact"><br>

     <label for="uemail"><b>Email</b></label>
    <input type="email" value="<?php echo $row['email']; ?>" name="uemail" required id="idemail"><br>

    <button type="submit"  id="btn">Submit</button>
    
</form>
</body>
</html>