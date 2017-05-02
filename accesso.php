<html>
 <head>
 </head>
  <body>
   <?php
 $link = mysqli_connect("localhost", "root", "");
 mysqli_select_db($link, "registrazione");
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$Username = stripcslashes($Username);
	$Password = stripcslashes($Password);
	$Username = mysqli_real_escape_string($link, $Username);
	$Password = mysqli_real_escape_string($link, $Password);
	$result = mysqli_query($link, "SELECT * FROM entry WHERE username = '$Username' and password = '$Password'")
			  or die("Failed to query database ".mysql_error());
	$row = mysqli_fetch_array($result);
	if ($row['username'] == $Username && $row['password'] == $Password)
	{
            //redirect verso pagina
          header("location: index.html");
          exit;
	}
	else
	{
		echo "Failed to login!";
	}
   ?>
  </body>
</html>
