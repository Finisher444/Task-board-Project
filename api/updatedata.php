<?php include '_dbconnect.php'; ?>


<?php

$method = $_SERVER['REQUEST_METHOD'];
$task = $_POST['task'];
$taskhead = $_POST['taskhead'];
$numb = $_POST['number'];
    if($method=='POST'){
        
    $sql1 = "UPDATE `alltasks` SET `task_head` = '$taskhead', `task_body` = '$task' WHERE `alltasks`.`id` = $numb";
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