<?php
session_start();
if($_SESSION["type"] == 1)
{
?>
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
                <h1 class="m-0" style="font-family:serif; font-size:xxx-large; text-align:center" >القسم</h1>
            </div><!-- /.col -->
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">الئيسية</a></li>
                <li class="breadcrumb-item active">القسم</li>
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
                      <a class="btn btn-info" style="float:left" href="addCategory.php">اضافة قسم جديد</a>
                    </div>
                    <!-- /.card-header -->
                    
                      <table id="example2" class="table table-bordered table-hover" style="text-align:right; font-family:serif;" dir="rtl">
                        <thead>
                          <tr>
                            <th style="width:100px">رقم القسم</th>
                            <th>اسم القسم</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM `category`";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                            // print_r($row);die();
                                echo "<tr >";
                                echo "<td><a href='subcategory.php?id=$row[id]'>" . $row["id"]. "</a></td>";
                                echo "<td><a href='subcategory.php?id=$row[id]'>" . $row["title"]. "</a></td>";
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
<?php 
}else{
  echo "You don't have permition to enter this page";
}