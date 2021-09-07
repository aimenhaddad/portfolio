<?php

 include_once "../include/db.php";
 echo "hello";
if(isset($_GET['id'])) {
    $me="";
    
    $filePath= array();
    $id=$_GET['id'] ;
    $sq="SELECT img_details, img_details1, img_details2, img_details3, img_details4 FROM portfolio 
    WHERE id=$id";
      
    $resul = mysqli_query($conn,  $sq);
          if (mysqli_num_rows($resul)) {
            while ($images = mysqli_fetch_assoc($resul)) { 
            $filePath[0]="uploads/".$images['img_details'];
            $filePath[1]="uploads/".$images['img_details'];
            $filePath[2]="uploads/".$images['img_details'];
            $filePath[3]="uploads/".$images['img_details'];
            $filePath[4]="uploads/".$images['img_details'];
            }
        }
    $sql="DELETE FROM portfolio WHERE id=$id";
    
    $result= mysqli_query($conn, $sql);
    if ($result) {

        for ($e=0; $e <5 ; $e++) { 
         if (file_exists($filePath[$e])) {
            unlink($filePath[$e]);
          
            $me="delete success & delete";
        }
        }
       
       
  
    }else {
       
        $me="delete  no success";
    }

header("Location:../innerpage.php? $me");
}




?>