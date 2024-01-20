
<?php include("../../config/db.php");?>
<?php
    $sql = "SELECT * FROM `category`";
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
