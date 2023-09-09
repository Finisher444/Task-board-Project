<?php include '_dbconnect.php'; ?>


<?php

 
    $method = $_SERVER['REQUEST_METHOD'];

    $cat = $_POST['taskcategory'];
    if($method=='POST'){
        
    $sql2 = "INSERT INTO `categories` (`category_name`,`timestamp`) VALUES ( '$cat', current_timestamp())";
    $result2 = mysqli_query($conn, $sql2);
    if($result2){
   echo json_encode(array("success" => true));
   return;

      }   else{
        echo mysqli_error($conn);
        echo json_encode(array("success" => false));
        return;
      } 
    }




?>