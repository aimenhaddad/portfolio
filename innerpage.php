<?php 
session_start(); 
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">
 
  <?php include_once "include/css1.php";?>
 
  <style>
    body{
      background: #bdc3c7;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
  </style>
</head>

<body>


  <!-- ======= Header ======= -->
 
 <?php include_once "forms/navbar.php";?>
 <?php include_once "include/js.php";?>
  <!-- End Header -->

    <section class="inner-page">
      <div class="container">
       <!-- UPLOAD -->

       
      

	


<!-- +^^+****************+^^+ -->
      
      <div class="row">
        
      <div class="col-lg-12 col-xs-12" >
          <h1>wellcom</h1>
         
          
           <!-- Insert btn modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-folder-plus"></i></button>
     <!--ADD & Modife Information  the modal with a button -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#edit"><i class="fas fa-user-edit"></i></button>
  <!-- *****************^**************^*************** -->
          <?php 
          include_once "include/db.php";
          $sql = "SELECT id,category, project, langage, data_base, descr, img_details FROM portfolio WHERE 1 ORDER BY id DESC";
          $result = mysqli_query($conn,  $sql);
          if (mysqli_num_rows($result)) { ?>
          <div class="main-content1 ">
       <div  class="table-responsive d-flex "> 
        <table class="table  ">
          <thead class="thead" >
      <tr>
    <th scope="row">category</th>
    <th scope="row">project</th>
    <th scope="row">langage</th>
    <th scope="row">data_base</th>
    <th scope="row">description</th>
    <th scope="row">thumbnail</th>
    <th scope="row">Action</th>
      </tr>
    </thead>
    <tbody class="tbody  ">
    <?php while ($rows=mysqli_fetch_assoc($result)) { ?>
        <tr  >
            <td class="p-1"><?= $rows['category'];   ?></td>
            <td class="p-1"><?= $rows['project'];   ?></td>
            <td class="p-1"><?= $rows['langage']; ?></td>
            <td class="p-1"><?= $rows['data_base']  ;  ?></td>
            <td class="p-1"><?= $rows['descr'];   ?></td>
  <td class="p-1"> <img src="forms/uploads/<?=$rows['img_details']?>" height="100px" width="100" class="img-fluid img-thumbnail " >  </td>

    <td class="p-1">
    <a class="btn btn-primary"  href="forms/edit.php?id=<?=$rows['id'];?>" ><i class="fas fa-pencil-alt"></i></a>  
    
    <a class="btn btn-danger" href="forms/delete.php?id=<?=$rows['id'];?>" ><i class='fa fa-trash' ></i></i></a>
    </td>
        </tr>
         <?php } }?>
      </tbody>
      </table>
   </div>
  </div>
 </div>
</div>

      </div>
    </section>

  
  
<div class="container">
  
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Insert Project</h4>
        </div>
        <div class="modal-body" style="background-color: #1c2638; color:#fff;" >
        <div class="container-fluid me-1">
       
	
	
			
        
				<div class="row ">

        <form method="POST" action="forms/addproj.php"  enctype="multipart/form-data">

					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-3 fs-1 text-primary">Personal Details</h6>
					</div>
    </div>
				<div class="row ">
					
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">					
      
        <select name="category" >
          <option >app</option>
          <option >desktop</option>
          <option >web</option>
        </select>
					</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">					
        <input class="form-control" type="text" required placeholder="Name Project" name="project">
					</div>
					</div>

          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
        <input class="form-control" type="text" required placeholder="data_base" name="data_base"> 
					</div>
					</div>

          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">					
      
        <select name="langage"  >
          <option >php</option>
          <option >java</option>
          <option >html & css</option>
          <option >javascript</option>
          <option >c++</option>
          <option >pethyon</option>
        </select>
					</div>
					</div>
					

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="form-group">
        <textarea name="descri" class="form-control" required placeholder="Description"></textarea>
					</div>
					</div>

          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <label for="details" class="fs-4 text-primary">Portfoio Details</label>
					<div class="form-group form-control">
       <input type="file" name="image[]"  required  multiple accept=".jpg, .png, .jpeg" />
					</div>
					</div>
          
			</div>
    </div>
  </div>
        <div class="modal-footer">
        <button  class="btn btn-info" type="submit" name="insert" >Insert</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  
</div>

<?php 
         
          $sql44 = "SELECT  img_profile, bg, name, face, inst, twit, linkedin, skype FROM social WHERE 1";
          $result44 = mysqli_query($conn,$sql44);
          if (mysqli_num_rows($result44)) {
          while ($row=mysqli_fetch_assoc($result44)) { ?>
<!-- Modal -->
<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">ADD & Modife Information</h4>
      </div>
      <div class="modal-body">
       <!-- ###################### **********start************ ######################## -->
       <div class="container-fluid ">
    
    <div class="row">
  		<div class="col-sm-6"><!--left col-->
              

      <div class="text-center">
        <img src="forms/portfolio/<?=$row['img_profile']?>" height="100px" width="100" >
       
        <h6>Upload  photo...</h6>
        <form action="forms/social.php" method="POST"enctype="multipart/form-data">
 <input type="file" class="text-center center-block file-upload" name="fi"accept=".jpg, .png, .jpeg">
 <button class="btn btn-info btn-sm"type="submit" name="fi"> save</button>
        </form>
     </div>
      </div><!--/left col-->

      <div class="col-sm-6">      
      <div class="text-center">
        <img src="forms/portfolio/<?=$row['bg']?>" height="100px" width="100"  >
        <h6>Upload a photo...</h6>
        <form action="forms/social.php" method="POST"  enctype="multipart/form-data">
        <input type="file" class="text-center center-block file-upload" name="fil">
        <button class="btn btn-info btn-sm"type="submit" name="fil"> save</button>
    </form>

      </div> 
          
      </div><!--col6-->  
      
        </div><!--/col-3-->
      
    	<div class="col-sm-12">          
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
               
                  <form  action="forms/social.php" method="POST"  enctype="multipart/form-data" >
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Name Pernom</h4></label>
                              <input type="text" class="form-control" name="name"  id="first_name" value="<?=$row['name']?>">
                          </div>
                      </div>

                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Link Facebook</h4></label>
                              <input type="text" class="form-control" name="face" id="last_name" value="<?=$row['face']?>">
                          </div>
                      </div>
          
                      
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Link Instagram</h4></label>
                              <input type="text" class="form-control" name="inst" id="mobile" value="<?=$row['inst']?>">
                          </div>
                      </div>
                      
                    
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Link Twitter </h4></label>
                              <input type="text" class="form-control" name="twit" id="password" value="<?=$row['twit']?>" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Link Linkedin</h4></label>
                              <input type="text" class="form-control" name="linkedin" id="password2" value="<?=$row['linkedin']?>">
                          </div>
                      </div>
                      <div class="col-xs-6 ">
                              <label for="pass"><h4>Link Skype</h4></label>
                              <input type="text" class="form-control" name="skype" id="pass" value="<?=$row['skype']?>" >
                          </div>
                      </div>
            
      
      <div class="modal-footer">
     <button class="btn btn-success" name="ss" type="submit"> Save</button>
        </form>  
        </div><!--/tab-content-->
        </div><!--/col-9-->
    </div><!--/row-->

      </div>
      </div>
    </div>
    <?php    }} }?>
  </div>
</div>

   
</body>

</html>