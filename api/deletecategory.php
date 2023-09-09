<?php include '_dbconnect.php'; ?>


<?php
// if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
$method = $_SERVER['REQUEST_METHOD'];

    if($method=='GET'){
        $task = $_GET['selfie'];



    $sql1 = "DELETE FROM `categories` WHERE `categories`.`sno` = $task";
    $sql2 = "DELETE FROM `alltasks` WHERE `alltasks`.`category_id` = $task";

    $result2= mysqli_query($conn,$sql2);
    $result1 = mysqli_query($conn, $sql1);
    if($result1 && $result2){
   echo json_encode(array("success" => true));
   return;

      }   else{
        echo json_encode(array("success" => false));
        return;
      } 
    }




?>