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
                <h1 class="m-0"  style="font-family:serif; font-size:xxx-large; text-align:center">الاقسام</h1>
            </div><!-- /.col -->
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
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
                        <!-- form start -->
                          <form action="../backend/addCategory.php" method="post" style="text-align:right; font-family:serif;" dir="rtl">
                            <div class="card-body">
                              <div class="form-group">
                                <label for="title" style="font-size:x-large">إضافة قسم جديد </label>
                                <input type="text" class="form-control" name="title"  placeholder="اضافة قسم جديد">
                              </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer" style="width: 200px; text-align: center; margin-left: auto; margin-right: auto; margin-top:27px">
                              <button type="submit" class="btn btn-primary"style="width:160px; font-size:large">تأكيد</button>
                            </div>
                        </form>
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
  