
<?php include("../../config/db.php");
    //echo '<pre>'; print_r($_POST);die();
    if(!isset($_GET['id']) || $_GET['id'] == "")
    {
        die("id is requierd");
    }

    $id = $_GET['id'];
    
    $sql = "SELECT a.*, b.stutes,b.reasion,e.title as cat_title, f.title as sub_cat_title 
    FROM reports a JOIN states b ON (a.id = b.report_id) 
    LEFT OUTER JOIN states c ON (a.id = c.report_id AND (b.id < c.id OR (b.id = c.id AND b.id < c.id))) 
    INNER JOIN category as e on (a.cat_id = e.id) 
    INNER JOIN sub_category as f on (a.sub_cat_id = f.id) 
    WHERE c.id IS NULL AND a.id=$id";
    $result =  $conn->query($sql);
    $res = mysqli_fetch_assoc($result);

    $conn->close();
    //print_r($data);die();
    echo json_encode($res);

?>
