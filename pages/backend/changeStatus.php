<pre>
<?php include("../../config/db.php");
    if(!isset($_GET['report_id']) || $_GET['report_id'] == "")
    {
        die("report id is requierd");
    }
    if(!isset($_GET['status']) || $_GET['status'] == "")
    {
        die("status is requierd");
    }

    $status = $_GET['status'];
    $report_id = $_GET['report_id'];
    $date     = date("Y-m-d h:i:s");
    $reasion = isset($_GET['reasion'])?$_GET['reasion']:'';
    
    $query = "INSERT INTO `states`(`report_id`, `stutes`, `reasion`, `date`) VALUES ('$report_id',' $status','$reasion','$date')";

    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }


    $conn->close();
    header("Location: ../frontend/update_states.php?id=$report_id"); /* Redirect browser */
    exit();

?>