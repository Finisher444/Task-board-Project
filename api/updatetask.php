<?php include '_dbconnect.php'; ?>


<?php

$method = $_SERVER['REQUEST_METHOD'];
$task = $_GET['task'];
$taskhead = $_GET['taskhead'];
    if($method=='GET'){
    $sql1 = "UPDATE `alltasks` SET `category_id` = '$taskhead' WHERE `alltasks`.`id` = $task";
    $result1 = mysqli_query($conn, $sql1);
    if($result1){
   echo json_encode(array("success" => true));
   return;

      }   else{
        echo json_encode(array("success" => false));
        return;
      } 
    }




?>