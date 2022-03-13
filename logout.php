<!DOCTYPE html>
<html>
<head>
	<title>CONTACTS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="" method="post">
     	<h2>CONTACTS</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Contact Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Contact Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Contact Name"><br>
          <?php }?>

          <label>Email id</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Email id"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Email id"><br>
          <?php }?>


     	<label>Contact Number</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Contact Number"><br>

          <label>Address</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Address"><br>

     	<button type="submit">submit</button>
        <button type="logout">logout</button>
     </form>
</body>
</html>