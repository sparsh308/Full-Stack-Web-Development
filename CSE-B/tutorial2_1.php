
<?php
if (isset($_POST['btn'])){
echo $_POST['id'].'<br>';
echo $_POST['username'].'<br>';
echo $_POST['age'].'<br>';
echo $_PO['contact'].'<br>';
}
else{
	echo 'welcome';
}
?> 
<html>

<head>
	<title>Input Form</title>
</head>
<body>
   
	 
   <form action="sample.php" method="post">
   	<center>
   ID:<input name="id",type="text" placeholder="enter id"><br>
   Name:<input type="text" name="username" placeholder="enter name"><br>
   Age:<input type="text" name="age" placeholder="enter age "><br>
   contact:<input type="text" name="contact" placeholder="enter the contact no"> <br>	
   <input type="submit" name="btn">
</center>
   </form>
</body>
</html>