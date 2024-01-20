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
              <div class="col-sm-12" style="text-align:center">
                  <h1 class="m-0" style="font-family:serif;font-size:xxx-large">المستخدمين</h1>
              </div><!-- /.col -->
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
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
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title"></h3>
                      <a class="btn btn-info" style="float:left; font-family:serif" href="addUsers.php">اضافة مستخدم جديد</a>
                    </div>
                    <div class="card-header">
                      <h3 class="card-title"></h3>
                      <a class="btn btn-danger" style="float:left; width: 125px; font-family:serif" href="deleteUser.php" >حذف مستخدم</a>
                
                      <?php
                      
  
                      
                      ?>
                    </div>
                    <!-- /.card-header -->
                    
                      <table id="example2" class="table table-bordered table-hover"  dir="rtl" style="text-align:right;font-family:serif;">
                        <thead>
                          <tr>
                            <th style="width:120px">الرقم الوظيفي</th>
                            <th>اسم الموظف</th>
                            <th>القسم</th>
                            <th>البريد الاكتروني</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT x.*,b.title as cat_title FROM `users` as x
                        INNER JOIN category as b on (x.cat_id = b.id)
                        where x.type = 2";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                            // print_r($row);die();
                                echo "<tr >";
                                echo "<td>" . $row["id"]. "</td>";
                                echo "<td>" . $row["full_name"]. "</td>";
                                echo "<td>" . $row["cat_title"]. "</td>";
                                echo "<td  style='text-align:left; '>" . $row["email"]. "</td>";
                                echo "</tr>";
                            }
                          echo "</table>";
                        } else {
                            echo "0 results";
                        }
                        
                        $conn->close();
                        ?>
                        </tbody>
                      </table>

                    <div class="card-body">
                      
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
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