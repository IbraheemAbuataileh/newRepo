<?php include("../../config/db.php");

if(!isset($_POST['user_id']) || $_POST['user_id'] == ""){
     die("user_id is required");
}

$user_id = $_POST['user_id'];

$query = "DELETE FROM `users` WHERE `id` = '$user_id'";

if ($conn->query($query) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../frontend/users.php"); /* Redirect browser */
exit();
?>