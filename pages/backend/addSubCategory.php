
<?php 

    include("../../config/db.php");
  
    // print_r($_POST);die();
    if(!isset($_POST['title']) || $_POST['title'] == "")
    {
        die("id is requierd");
    }
    if(!isset($_POST['cat_id']) || $_POST['cat_id'] == "")
    {
        die("id is requierd");
    }
    $title = $_POST['title'];
    $cat_id = $_POST['cat_id'];
    
    $query = "INSERT INTO `sub_category`(`cat_id`, `title`) VALUES ('$cat_id','$title')";
    

    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    

    $conn->close();
    header("Location: ../frontend/subcategory.php?id=$cat_id"); /* Redirect browser */
    exit();

?>