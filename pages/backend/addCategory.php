
<?php include("../../config/db.php");?>
<?php
//  print_r($_POST);die();
    if(!isset($_POST['title']) || $_POST['title'] == "")
    {
        die("id is requierd");
    }

    $title = $_POST['title'];

    $query = "INSERT INTO `category`(`title`) VALUES ('$title')";

    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    

    $conn->close();
    header("Location: ../frontend/category.php"); /* Redirect browser */
    exit();

?>