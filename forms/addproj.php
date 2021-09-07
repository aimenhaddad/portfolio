<?php
include_once "../include/db.php";
  $name=$_POST['project'];
  $category=$_POST['category'];
  $langage=$_POST['langage'];
  $db=$_POST['data_base'];
  $descri=$_POST['descri'];
 
if (isset($_POST['insert']) &&  isset($_FILES['image'])) {
		
   
   $i=0;
  
    $file=$_FILES['image'];
    $img = array();
    foreach ($file['tmp_name'] as $key => $value) {
    $tmpname = $file['tmp_name'][$key];
    $Name    =$file['name'][$key];
    $Error   =$file['error'][$key];
    $Size    =$file['size'][$key];
    
    if ($Error === 0) {
		if ($file_Size > 20000000) {
      header("Location:../innerpage.php? Sorry, your file is too large."); 
		
		}else{ 
    $nom="OG".$Name;
    $file_upload_path = 'uploads/'.$nom;
    move_uploaded_file($tmpname,$file_upload_path);
    $img[$i]=$nom; 
    $i++;
  }}else {
   
    header("Location:../innerpage.php? unknown error occurred! "); 
    }
  
}	
// Insert into Database
$sql = "INSERT INTO portfolio (id, category, project, langage, data_base, descr, img_details, img_details1,img_details2,img_details3,img_details4)  VALUES (null,'$category','$name','$langage','$db','$descri','$img[0]','$img[1]','$img[2]','$img[3]','$img[4]') ";

$result = mysqli_query($conn, $sql);
if($result){
       header("Location:../innerpage.php?success "); 
      }else {
        header("Location:../innerpage.php? no conect"); 
      }
   
   
          
}

?>