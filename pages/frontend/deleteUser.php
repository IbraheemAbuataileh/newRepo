<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('../../layout/head.php'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  
<?php include("../../config/db.php");?>
<div class="wrapper">
  
  <?php include("../../layout/header.php");?>
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
     
  <!-- Navbar -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content" dir="rtl" style="text-align:right">
        <div class="container-fluid" >
        <form action="../backend/deleteUser.php" method="post">
            <div class="form-group">
              <label for="exampleFormControlSelect1">تحديد المستخدم المراد حذفه</label>
              <select class="form-control" name="user_id">
              <?php
                    $sql = "SELECT * FROM `users`";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<option value=$row[id]>". $row["full_name"]."</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                    
                    $conn->close();
                 ?>
              </select>
            </div>
            <div class="card-footer"style="width: 200px; text-align: center; margin-left: auto; margin-right: auto; margin-top:27px">
              <button type="submit" class="btn btn-danger" style="width:160px">حذف</button>
            </div>
          </form>
        </div>
    </section>
</div>  
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</div>
<!-- ./wrapper -->

  <?php include("../../layout/jsPlugins.php");?>
</body>
</html>