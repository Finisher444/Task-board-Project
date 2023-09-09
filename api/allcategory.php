<?php include '_dbconnect.php'; ?>



<?php


           
           $sql = "SELECT * FROM `categories`" ; 
           $result = mysqli_query($conn, $sql);
           if (!$result) {
            echo json_encode(array("success" => false, "message" => "Some error occurred"));
            return;
           }

           $allcities = array();

           while($row = mysqli_fetch_assoc($result)){

               $allcities[] = $row;
                }

           echo json_encode(array("success" => true, "data" => $allcities));
        
               

?>