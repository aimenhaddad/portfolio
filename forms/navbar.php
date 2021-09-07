<?php 
  
  include_once "include/db.php";
  session_start();
  $id=$_SESSION['id'];
  $sql = "SELECT user_name FROM users WHERE id=$id ";
  $res = mysqli_query($conn, $sql);

  if (mysqli_num_rows($res) > 0) {
      while ($images = mysqli_fetch_assoc($res)) { 
  ?>



<html>
<head>



  <style>
 
</style>
</head>
<body > 
<nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
  <div class="container">
    <a class="navbar-brand" href="index.php"><i class='fa fa-reply'></i></a>
    
    
      <div class="d-flex">
      <div class="colo fs-5 "> <?=$_SESSION['user_name'];?> </div> <?php } }?>
   
    <div class="dropdown align-items-center">
<span class="dropdown-toggle fs-3 " type="button" data-toggle="dropdown" > </span> 
        
          <div class="dropdown-menu">
  <li><span type="button" class="text-dark mx-2" data-toggle="modal" data-target="#uplo"> <i class="fa fa-cog"> </i> Setting</span></li>
    <li><a class="text-dark mx-2" href="forms/logout.php"> <i class="fa fa-sign-out"></i> LogOut</a></li>
  </div>
     </div>
    </div>
  </div>
</nav>

  


                                      <!--Model pop up EDIT -->
<div  id="uplo" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title w-100 font-weight-bold">EDIT Profile</h5>
              </div>
     
<div class="modal-body mx-3">
<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
       

     	<h2 class="text-center">Change Password</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <form action="forms/chang.php"
           method="post"
          >
     	
      
     	<label>New Password</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password"
              class="form-control"/>
     	       <br>

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password"
              class="form-control"/>
     	       <br>
              <label>Old Password</label>
     	<input type="password" 
     	         name="op" 
               placeholder="New Password"
     	        class="form-control"/>
     	       <br>

     	<button class="btn btn-primary btn-md" type="submit">CHANGE</button>
          
     
     </form>
    </div>
  </div>
</div>
</div>
<!-- ######################################################################################## -->



  
</body>
</html>