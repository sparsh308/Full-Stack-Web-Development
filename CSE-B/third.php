
</head>
<body>
	 
   <form action="" method="post">
   Name:<input type="text" name="username">
   <br>	
   <input type="submit" name="btn">
   </form>
</body>
</html>
<?php
echo 'welcome'.' '.$_GET['username'];
 ?>