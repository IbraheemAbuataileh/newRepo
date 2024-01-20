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
                <h1 class="m-0" style="font-family:serif; font-size:xxx-large; text-align:center">البلاغات الجديدة</h1>
                <div id="search-container">
                </div>

            </div><!-- /.col -->
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>/.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        
        <!---------------------------------------->
        <!--------------Work Section-------------->
        <!---------------------------------------->
           <!-- <a class='btn btn-info' href='in_progres.php'>Accept<a/>
           <a class='btn btn-danger' href='rejected.php?id=$row[id]'>Reject</a>"; -->
        
        <!-- 
          1- get the Table desgin
          2- fill the table from the db 
          3- add new record to the table 
        -->
        <section class="content" style="font-family:serif;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title"></h3>
                    </div>
                    <!-- /.card-header -->
                    
                      <table id="example1" class="table table-bordered table-hover"dir="rtl" style="text-align:right">
                        <thead>
                          <tr>
                            <th>رقم البلاغ</th>
                            <th>القسم</th>
                            <th>المشكلة</th>
                            <th>رقم الهاتف</th>
                            <th>ملاحظات</th>
                            <th>التاريخ والوقت</th>
                            <th>حالة البلاغ</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($_SESSION["type"]))
                        {
                          if($_SESSION["type"] == 1){
                            $sql = "SELECT a.*, b.stutes,e.title as cat_title, f.title as sub_cat_title 
                            FROM reports a JOIN states b ON (a.id = b.report_id) 
                            LEFT OUTER JOIN states c ON (a.id = c.report_id AND (b.id < c.id OR (b.id = c.id AND b.id < c.id))) 
                            INNER JOIN category as e on (a.cat_id = e.id) 
                            INNER JOIN sub_category as f on (a.sub_cat_id = f.id) 
                            WHERE c.id IS NULL AND b.stutes= 1";
                          }else{
                            if($_SESSION["type"] == 2){
                              $sql = "SELECT a.*, b.stutes,e.title as cat_title, f.title as sub_cat_title 
                              FROM reports a JOIN states b ON (a.id = b.report_id) 
                              LEFT OUTER JOIN states c ON (a.id = c.report_id AND (b.id < c.id OR (b.id = c.id AND b.id < c.id))) 
                              INNER JOIN category as e on (a.cat_id = e.id) 
                              INNER JOIN sub_category as f on (a.sub_cat_id = f.id) 
                              WHERE c.id IS NULL AND b.stutes= 1 AND a.cat_id = '$_SESSION[cat_id]'";
                           //   print_r($sql);die();
                            }
                          } 
                        }                       
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                            // print_r($row);die();
                                echo "<tr>";
                                echo "<td>" . $row["id"]. "</td>";
                                echo "<td>" . $row["cat_title"]. "</td>";
                                echo "<td>" . $row["sub_cat_title"]. "</td>";
                                echo "<td>" . $row["phone"]. "</td>";
                                echo "<td>" . $row["description"]. "</td>";
                                echo "<td>" . $row["date"]. "</td>";
                                echo "<td><a class='btn btn-success' style='width:100%' href='update_states.php?id=$row[id]'>عرض</a>";
                                // if($row["stutes"] == 1) echo 'جديد';
                                // if($row["stutes"] == 2) echo 'قيد العمل';
                                // if($row["stutes"] == 3) echo 'تم الانتهاء';
                                // if($row["stutes"] == 4) echo 'مرفوض';
                                echo "</td>";
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
</div>
<!-- ./wrapper -->

  <?php include("../../layout/jsPlugins.php");?>
</body>
</html>