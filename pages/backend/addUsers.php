
<?php include("../../config/db.php");?>
<?php

if(!isset($_POST['full_name']) || $_POST['full_name'] == "")
{
    die("id is requierd");
}

if(!isset($_POST['email']) || $_POST['email'] == "")
{
    die("id is requierd");
}

if(!isset($_POST['password']) || $_POST['password'] == "")
{
    die("id is requierd");
}

if(!isset($_POST['cat_id']) || $_POST['cat_id'] == "")
{
    die("id is requierd");
}

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password =$_POST['password'] ;
    $cat_id = $_POST['cat_id'];
    $type = 2;

    $query = "INSERT INTO `users`(`cat_id`, `full_name`, `email`, `password`, `type`) VALUES ('$cat_id','$full_name','$email','$password','$type')";

    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    

    $conn->close();
    header("Location: ../frontend/users.php"); /* Redirect browser */
    exit();

?>