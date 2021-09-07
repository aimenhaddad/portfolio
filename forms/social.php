<?php 
include_once "../include/db.php";
// add photo profile
if (isset($_POST['fi']) && isset($_FILES['fi']) ) {
  
    $img_name3 = $_FILES['fi']['name'];
    $img_size3 = $_FILES['fi']['size'];
    $tmp_name3 = $_FILES['fi']['tmp_name'];
    $error3 = $_FILES['fi']['error'];
  
    if ($error3 === 0) {
      if ($img_size3 > 100000000) {
      echo "Sorry, your file is too large.";
      }else {
        $img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);
        $img_ex_lc3 = strtolower($img_ex3);
  
          $new_img_name3 ="profile.".$img_ex_lc3;
          $img_upload_path3 = 'portfolio/'.$new_img_name3;
          move_uploaded_file($tmp_name3, $img_upload_path3);
  
          // UPDATE into Database
          $sql3="UPDATE social SET img_profile='$new_img_name3' WHERE idd=1";
  
    if ( mysqli_query($conn, $sql3)) {
        header("Location:../innerpage.php?success add profile");
    }else{
        header("Location:../innerpage.php?no success add profile");
    }
   
        }
    }else {
    echo "unknown error occurred!";
    }
  
  }
   // add photo bg     
   if (isset($_POST['fil']) && isset($_FILES['fil']) ) {
  
    $img_name = $_FILES['fil']['name'];
    $img_size = $_FILES['fil']['size'];
    $tmp_name = $_FILES['fil']['tmp_name'];
    $error = $_FILES['fil']['error'];
  
    if ($error === 0) {
      if ($img_size > 100000000) {
      echo "Sorry, your file is too large.";
      }else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
  
          $new_img_name ="bg.".$img_ex_lc;
          $img_upload_path = 'portfolio/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);
  
          // UPDATE into Database
          $sql="UPDATE social SET bg='$new_img_name' WHERE idd=1";
  
    if ( mysqli_query($conn, $sql)) {
      header("Location:../innerpage.php?success add bg");
    }else{
        header("Location:../innerpage.php?no success add bg ");
    }
   
        }
    }else {
    echo "unknown error occurred!";
    }
  
  }
  // save


if (isset($_POST['ss'])) {
$name = $_POST['name']; 
$face = $_POST['face'];
$inst = $_POST['inst'];
$twit =$_POST['twit'];
$skype = $_POST['skype'];
$linkedin = $_POST['linkedin'];

  $sq="UPDATE social SET name='$name',face='$face',inst='$inst',twit='$twit',linkedin='$linkedin',skype='$skype' WHERE idd=1";
  if ( mysqli_query($conn, $sq)) {
    header("Location:../innerpage.php?success ");
  }else{
      header("Location:../innerpage.php?nosuccess");
  }
  
   
  
}


?>