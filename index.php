<!DOCTYPE html>
<html>
<head>
	<title>SIGN IN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>SIGN IN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email id</label>
     	<input type="text" name="uname" placeholder="Email id"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
		  <h3>This is copyright of Steven T USN:2vd18cs054: &copy;</h3>
     </form>
</body>
</html>