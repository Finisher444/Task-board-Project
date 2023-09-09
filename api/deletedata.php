<?php include '_dbconnect.php'; ?>


<?php
// if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
$method = $_SERVER['REQUEST_METHOD'];

    if($method=='GET'){
        $task = $_GET['selfie'];



    $sql1 = "DELETE FROM `alltasks` WHERE `alltasks`.`id` = $task";
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