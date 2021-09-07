<?php 
include "../include/db.php";

session_start(); 
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {



if (isset($_GET['id'])) {  

  $id=$_GET['id'];
       
  $sql = "SELECT * FROM portfolio WHERE id='$id' ";
  $res = mysqli_query($conn,  $sql);
  if (mysqli_num_rows($res) ==1) {
    while ($images = mysqli_fetch_assoc($res)) { 
// edit img 

if (isset($_POST['edit']) && isset($_FILES['file'])  ) {
  $filePath="uploads/".$images['img_details'];
 
    $img_name = $_FILES['file']['name'];
    $img_size = $_FILES['file']['size'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
  
    if ($error === 0) {
      if ($img_size > 100000000) {
        header("Location:edit.php?id=$id Sorry, your file is too large"); 
      }else {
     
  
          $new_img_name =$img_name;
          $img_upload_path = 'uploads/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);
  
          // UPDATE into Database
          $sql="UPDATE portfolio SET img_details='$new_img_name' WHERE  id='$id'";
  
    if ( mysqli_query($conn, $sql)) {
      if (file_exists($filePath)) {
        unlink($filePath);

        header("Location:edit.php?id=$id File Successfully update"); 
      }
      header("Location:edit.php?id=$id");
    }else{

      header("Location:edit.php?id=$id NO Successfully "); 
    }
   
        }
    }else {
      header("Location:edit.php?id=$id unknown error occurred"); 
    }
  
  }
 

 // edit img 1

if (isset($_POST['edit1']) && isset($_FILES['file1'])  ) {
  $filePath1="uploads/".$images['img_details1'];
 
  
    $img_name1 = $_FILES['file1']['name'];
    $img_size1 = $_FILES['file1']['size'];
    $tmp_name1 = $_FILES['file1']['tmp_name'];
    $error1 = $_FILES['file1']['error'];
  
    if ($error1 === 0) {
      if ($img_size1 > 100000000) {
      header("Location:edit.php?id=$id Sorry, your file is too large"); 
        
      }else {
       
  
          $new_img_name1 =$img_name1;
          $img_upload_path1 = 'uploads/'.$new_img_name1;
          move_uploaded_file($tmp_name1, $img_upload_path1);
  
          // UPDATE into Database
          $sql1="UPDATE portfolio SET img_details1='$new_img_name1' WHERE  id='$id'";
  
    if ( mysqli_query($conn, $sql1)) {
      if (file_exists($filePath1)) {
        unlink($filePath1);
          header("Location:edit.php?id=$id File Successfully update"); 
      }
      header("Location:edit.php?id=$id");
    }else{
      header("Location:edit.php?id=$id NO Successfully "); 
    }
   
        }
    }else {
    header("Location:edit.php?id=$id unknown error occurred!"); 
    }
  
  }
 // edit img 2

if (isset($_POST['edit2']) && isset($_FILES['file2'])  ) {
  $filePath2="uploads/".$images['img_details2'];
  
    $img_name2 = $_FILES['file2']['name'];
    $img_size2 = $_FILES['file2']['size'];
    $tmp_name2 = $_FILES['file2']['tmp_name'];
    $error2 = $_FILES['file2']['error'];
  
    if ($error2 === 0) {
      if ($img_size2 > 100000000) {
      header("Location:edit.php?id=$id Sorry, your file is too large"); 
        
      }else {
       
          $new_img_name2 =$img_name2;
          $img_upload_path2 = 'uploads/'.$new_img_name2;
          move_uploaded_file($tmp_name2, $img_upload_path2);
  
          // UPDATE into Database
          $sql2="UPDATE portfolio SET img_details2='$new_img_name2' WHERE  id='$id'";
  
    if ( mysqli_query($conn, $sql2)) {
      if (file_exists($filePath2)) {
        unlink($filePath2);
          header("Location:edit.php?id=$id File Successfully update"); 
      }
      header("Location:edit.php?id=$id");
    }else{
      header("Location:edit.php?id=$id NO Successfully "); 
    }
   
        }
    }else {
    header("Location:edit.php?id=$id unknown error occurred!"); 
    }
  
  }
 // edit img 3

if (isset($_POST['edit3']) && isset($_FILES['file3']) ) {
  $filePath3="uploads/".$images['img_details3'];
  
    $img_name3 = $_FILES['file3']['name'];
    $img_size3 = $_FILES['file3']['size'];
    $tmp_name3 = $_FILES['file3']['tmp_name'];
    $error3 = $_FILES['file3']['error'];
  
    if ($error3 === 0) {
      if ($img_size3 > 100000000) {
      header("Location:edit.php?id=$id Sorry, your file is too large"); 
        
      }else {
       
  
          $new_img_name3 =$img_name3;
          $img_upload_path3 = 'uploads/'.$new_img_name3;
          move_uploaded_file($tmp_name3, $img_upload_path3);
  
          // UPDATE into Database
          $sql3="UPDATE portfolio SET img_details3='$new_img_name3' WHERE  id='$id'";
  
    if ( mysqli_query($conn, $sql3)) {
      if (file_exists($filePath3)) {
        unlink($filePath3);
          header("Location:edit.php?id=$id File Successfully update"); 
      }
      header("Location:edit.php?id=$id");
    }else{
      header("Location:edit.php?id=$id NO Successfully "); 
    }
   
        }
    }else {
    header("Location:edit.php?id=$id unknown error occurred!"); 
    }
  
  }
         
  // edit img 4

  if (isset($_POST['edit4']) && isset($_FILES['file4']) ) {
    $filePath4="uploads/".$images['img_details4'];
   
      $img_name4 = $_FILES['file4']['name'];
      $img_size4 = $_FILES['file4']['size'];
      $tmp_name4 = $_FILES['file4']['tmp_name'];
      $error4 = $_FILES['file4']['error'];
    
      if ($error4 === 0) {
        if ($img_size4 > 100000000) {
        header("Location:edit.php?id=$id Sorry, your file is too large"); 
          
        }else {
        
            $new_img_name4 =$img_name4;
            $img_upload_path4 = 'uploads/'.$new_img_name4;
            move_uploaded_file($tmp_name4, $img_upload_path4);
    
            // UPDATE into Database
            $sql4="UPDATE portfolio SET img_details4='$new_img_name4' WHERE  id='$id'";
    
      if ( mysqli_query($conn, $sql4)) {
        if (file_exists($filePath4)) {
          unlink($filePath4);
            header("Location:edit.php?id=$id File Successfully update"); 
        }
        header("Location:edit.php?id=$id");
      }else{
        header("Location:edit.php?id=$id NO Successfully "); 
      }
     
          }
      }else {
        
      header("Location:edit.php?id=$id unknown error occurred!"); 
      }
    
    }

// save 
$category = $_POST['category'];
$langage = $_POST['langage'];
$data_base =$_POST['data_base'];
$project = $_POST['project'];
$descr = $_POST['descr'];

if (isset($_POST['save'])) {

  $sql11="UPDATE portfolio SET category='$category',project='$project',langage='$langage',data_base='$data_base',descr='$descr' WHERE  id='$id'";

  if ( mysqli_query($conn, $sql11)) {
    header("Location:edit.php?id=$id");
  }else{
    header("Location:edit.php?id=$id dont chang");
  }
  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EDIT Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.jpg" rel="icon">
  <link href="../assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <?php include_once "../include/css.php";?>
 
  <style>

.hidden { 
  display: none; 
}
  </style>
  
   </head>
<body>
<html>
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
 <div class="row">
        <div class=" col-6 d-flex justify-content-between align-items-center">
          <h2>Portfoio Details</h2>
        </div>
       
        <div class="col-6 justify-content-end d-flex ">
           <a href="../innerpage.php" class="text-info"><i class='fa fa-reply'></i></a>
        </div>
 </div>
      
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

      
      <div class="row gy-4">
        <div class="col-lg-7">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">
        
                <div class="swiper-slide">
      <form method="POST"  enctype="multipart/form-data" >
        <div class="row ">
        <div class="col-12 justify-content-end d-flex">
        <input  type="file" name="file" id="html_btn" id="vide"   accept=".jpg, .png, .jpeg"> 
        <button class="btn btn-info  " id="htmlbtn" type="submit" name="edit"> EDIT</button>
      </form> 
        </div>
        </div>
      <img src="uploads/<?=$images['img_details']?>"height = "400px" width = "390px" alt="">
        </div>
               
        <div class="swiper-slide">
        <form method="POST"  enctype="multipart/form-data">
        <div class="row ">
        <div class="col-12 justify-content-end d-flex ">
        <input  type="file" name="file1"   accept=".jpg, .png, .jpeg"> 
        <button class="btn btn-info  "type="submit" name="edit1"> EDIT</button>
        </form>
        </div>
        </div>
         <img src="uploads/<?=$images['img_details1']?>"height ="400px" width = "390px" alt="">
       </div>

         <div class="swiper-slide">
        <form method="POST"  enctype="multipart/form-data">
        <div class="row ">
        <div class="col-12 justify-content-end d-flex">
        <input  type="file" name="file2"   accept=".jpg, .png, .jpeg"> 
        <button class="btn btn-info "type="submit" name="edit2"> EDIT</button>
        </form>
        </div>
        </div>
        <img src="uploads/<?=$images['img_details2']?>"height = "400px" width = "390px" alt="">
        </div>

        <div class="swiper-slide">
        <form method="POST"  enctype="multipart/form-data">
        <div class="row ">
        <div class="col-12 justify-content-end d-flex ">
         
        <input  type="file" name="file3"   accept=".jpg, .png, .jpeg"> 
        <button class="btn btn-info "type="submit" name="edit3"> EDIT</button>
        </div>
        </div>
        </form>
         <img src="uploads/<?=$images['img_details3']?>"height = "400px" width = "390px" alt="">
        </div>

        <div class="swiper-slide">
        <form method="POST"  enctype="multipart/form-data">
        <div class="row ">
        <div class="col-12 justify-content-end d-flex ">
        <input  type="file" name="file4"   accept=".jpg, .png, .jpeg"> 
        <button class="btn btn-info "type="submit" name="edit4"> EDIT</button>
        </div>
        </div>
        </form>
         <img src="uploads/<?=$images['img_details4']?>"height = "400px" width = "390px"alt="">
        </div>
                </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
    
          <div class="col-lg-5">
            <div class="portfolio-info">
         
   
            <div class="row">
            <div class="col-12 justify-content-end d-flex ">
                 <input class="btn btn-info chang" type="button"   value="edit"/>
             </div>
             </div>
              <h3>Project information</h3>
             
        <ul>
<form method="POST" >
          
            <li>
            <div class="row">
            <div class="col-4">
         <strong>Category :</strong> 
          </div>
          <div class="col-7">
           <span class="value n"><?=$images['category']?> </span>
           <input class="edit hidden fn" type="text" name="category"  value="<?=$images['category']?>" />
            </div>
            </div>
           </li>
            <li>
            <div class="row">
            <div class="col-4">
         <strong>Langage :</strong> 
            </div>
         <div class="col-7">
         <span class="value n"><?=$images['langage']?> </span>
         <input class="edit hidden fn" type="text" name="langage"  value="<?=$images['langage']?>" />
            </div>
            </div>
          </li>

            <li>
            <div class="row">
            <div class="col-4">
            <strong>Data_base :</strong>
            </div>
            <div class="col-7">
            <span class="value n"><?=$images['data_base']?> </span>
            <input class="edit hidden fn" type="text" name="data_base"  value=" <?=$images['data_base']?>" />
            </div>
            </div>
            </li>

            <li>
            <div class="row">
            <div class="col-4">
         <strong>Project :</strong> 
            </div>
            <div class="col-7">
         <span class="value n"><?=$images['project']?> </span>
            <input class="edit hidden fn" type="text" name="project"  value="<?=$images['project']?>" />
            </div>
            </div>
          </li>  

                <li>
                <div class="row">
             <div class="col-4">
             <strong>Description :</strong> 
             </div>
            <div class="col-7">
        <span class="value n"><?=$images['descr']?></span>
<textarea  class="edit hidden fn" type="text" name="descr"  value="<?=$images['descr']?>" ><?=$images['descr']?></textarea>
</div>
            </div>
              </li>
             </ul>
            
            <div class="row">
            <div class="col-12 justify-content-end d-flex  d-grid gap-2">
                 <input class="btn btn-info hidden fn" type="submit" name="save" value="save"/>
             </div>
             </div>
      </form>
     

      </div>
     </div>
<?php } } }?>
        </div>

      </div>
    </section>

   <!-- ************** JUQERY and js ************** -->
 <?php include_once "../include/js.php";?> 
 <!-- ************** End ************** -->
<script>
 var activ=false;
  $(document).ready(function(){
  
    
  
  
  $('.chang').click(function(){
    if (activ) {
      $(".fn").hide();
    $(".n").show();
    activ=false;
    }else{
      $(".fn").show();
    $(".n").hide();
    activ=true;
    }
    
});


$('.edit').on('change',function() {
  $(this).siblings('.value').html($(this).val());
  $('.edit').addClass('hidden');
  $('.value').removeClass('hidden');

});

});
</script>

<?php }?>
  </body>
</html>