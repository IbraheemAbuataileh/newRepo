
<?php include("../../config/db.php");?>
<?php
    //echo '<pre>'; print_r($_POST);die();
    if(!isset($_POST['cat']) || $_POST['cat'] == "")
    {
        die("category is requierd");
    }
    if(!isset($_POST['sub_cat']) || $_POST['sub_cat'] == "")
    {
        die("Sub category is requierd");
    }
    if(!isset($_POST['desc']) || $_POST['desc'] == "")
    {
        die("description is requierd");
    }
    if(!isset($_POST['full_name']) || $_POST['full_name'] == "")
    {
        die("name is requierd");
    }
    if(!isset($_POST['phone']) || $_POST['phone'] == "")
    {
        die("phone is requierd");
    }
    if(!isset($_POST['lat']) || $_POST['lat'] == "")
    {
        die("location is requierd");
    }
    if(!isset($_POST['long']) || $_POST['long'] == "")
    {
        die("location is requierd");
    }

    $cat       = $_POST['cat'];
    $sub_cat   = $_POST['sub_cat'];
    $desc      = $_POST['desc'];
    $full_name = $_POST['full_name'];
    $phone     = $_POST['phone'];
    $lat       = $_POST['lat'];
    $long      = $_POST['long'];
    $date      = date("Y-m-d h:i:s");

    $query = "INSERT INTO `reports` ( `cat_id`, `sub_cat_id`, `full_name`, `phone`, `description`, `date`, `lat`, `long`)
                             VALUES ('$cat','$sub_cat','$full_name','$phone','$desc','$date','$lat','$long')";

    if ($conn->query($query) === TRUE) {
        $last_id = $conn->insert_id; 
            
        $query2 = "INSERT INTO `states`(`report_id`, `stutes`,`date`) VALUES ('$last_id','1','$date')";
        if ($conn->query($query2) === TRUE) {
            echo "New record created successfully <br>";
            $i = 0;
//print_r($_FILES['file']['tmp_name'][$i]);die();
//foreach($_FILES['file']['name'] as $file){
    
    $fileName = $_FILES['file']['name'];
    $fileTempName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    //Getting the file ext
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    //Array of Allowed file type
    $allowedExt = array("jpg","jpeg","png","pdf");

    if(in_array($fileActualExt, $allowedExt)){
        if($fileError == 0){
            $fileNemeNew = uniqid('',true).".".$fileActualExt;
            $fileDestination = '../../Uploads/'.$fileNemeNew;
            //function to move temp location to permanent location
            move_uploaded_file($fileTempName, $fileDestination);
            $query2 = "INSERT INTO `pictures`( `report_id`, `url`, `cat_id`, `date`) VALUES 
            ('$last_id','$fileDestination','1','2')";
            if ($conn->query($query2) === TRUE) {
                echo "New record created successfully <br>";
            }
        }else{
            //Message, If there is some error
            echo "Something Went Wrong Please try again!";
        }
    }else{
        //Message,If this is not a valid file type
        echo "You can't upload this extention of file";
    }
    $i++;
// }
        } else { 
            echo "Error: " . $query2 . "<br>" . $conn->error;date;
        }
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
    $conn->close();
    echo json_encode($last_id);
    //header("Location: ../frontend/category.php"); /* Redirect browser */
    exit();

?>