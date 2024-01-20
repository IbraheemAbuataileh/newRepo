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
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12">
                  <h1 class="m-0" style="text-align:center">إضافة مستخدم جديد</h1>
              </div><!-- /.col -->
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">الريسية</a></li>
                <li class="breadcrumb-item active">المستخدمين</li>
                </ol>
            </div>/.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        
        <!---------------------------------------->
        <!--------------Work Section-------------->
        <!---------------------------------------->
        
        <!-- 
          1- get the Table desgin
          2- fill the table from the db 
          3- add new record to the table 
        -->
        <section class="content" dir="rtl" style="text-align:right">
            <div class="container-fluid" >
            <form action="../backend/addUsers.php" method="post">
                <div class="form-group">
                  <label for="exampleFormControlInput1">الاسم الكامل</label>
                  <input type="text" class="form-control" name="full_name" placeholder="ادخل الاسم">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">البريد الالكتروني</label>
                  <input type="email" class="form-control" name="email" style="text-align:left" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">كلمة السر</label>
                  <input type="password" class="form-control" name="password" placeholder="ادخل كلمة السر">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">تحديد القسم</label>
                  <select class="form-control" name="cat_id">
                  <?php
                        $sql = "SELECT * FROM `category`";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                            // print_r($row);die();
                                echo "<option value=$row[id]>". $row["title"]."</option>";
                            }
                          echo "</table>";
                        } else {
                            echo "0 results";
                        }
                        
                        $conn->close();
                     ?>
                  </select>
                </div>
                <div class="card-footer"style="width: 200px; text-align: center; margin-left: auto; margin-right: auto; margin-top:27px">
                  <button type="submit" class="btn btn-primary" style="width:160px">تأكيد</button>
                </div>
           </form>
              <!-- /.row -->
            </div>
      <!-- /.container-fluid -->
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