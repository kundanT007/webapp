<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Input</title>
</head>
<body>
	<form name="frm" action="" method="POST" enctype="multipart/form-data">

		<input type="text" name="uname" required="rquired" />
		<input type="password" name="upass" required="required" />

		<input type="radio" name="urole" value=1/>Admin
		<input type="radio" name="urole" value=0 />User
		<br/>
		<input type="submit" name="submit" value="Login" />

	</form>	
</body>
</html>