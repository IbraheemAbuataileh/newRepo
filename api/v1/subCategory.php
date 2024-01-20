
<?php include("../../config/db.php");?>
<?php
    if(isset($_GET['id']))
    {
      $id = $_GET['id'];
    }else{
      die('you have to add the Id');
    }

    $sql = "SELECT * FROM `sub_category` where cat_id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
     // output data of each row
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        $data = [];
    }
    
    $conn->close();
     //print_r($data);die();
    echo json_encode($data);

?>
