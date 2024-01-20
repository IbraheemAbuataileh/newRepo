
<?php include("../../config/db.php");

if(!isset($_POST['username']) || $_POST['username'] == "")
{
    die("username is requierd");
}

if(!isset($_POST['password']) || $_POST['password'] == "")
{
    die("password is requierd");
}

$email = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * from users where `email` = '$email' AND `password` = '$pass'";

if ($result = $conn->query($sql)) {
    $res = mysqli_fetch_assoc($result);

    session_start();
    $_SESSION["email"] = $res['email'];
    $_SESSION["name"] = $res['full_name'];
    $_SESSION["type"] = $res['type'];
    $_SESSION["cat_id"] = $res['cat_id'];
    header("Location: ../../index.php"); /* Redirect browser */

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
