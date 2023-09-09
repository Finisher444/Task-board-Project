<?php include '_dbconnect.php'; ?>


<?php

  
$method = $_SERVER['REQUEST_METHOD'];
$task = $_POST['task'];
$taskhead = $_POST['taskhead'];
$cat = $_POST['category'];
    if($method=='POST'){
    $sql1 = "INSERT INTO `alltasks` (`task_head`, `task_body`,`category_id`, `timestamp`) VALUES ('$taskhead', '$task',$cat, current_timestamp())";
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