<?php
if(isset($_GET['id']))
{
  $id = $_GET['id'];
}else{
  die('you have to add the Id');
}
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
                <h1 class="m-0" style="font-family:serif; font-size:xxx-large; text-align:right">البلاغات</h1>
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
        <?php
          $sql = "SELECT * from states where report_id = $id ORDER by id DESC";
          $result =  $conn->query($sql);
          $res = mysqli_fetch_assoc($result);
        ?>
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card" style="padding:40px">
                    <?php
                      if( $res['stutes'] == 1){
                        echo "<h1 style='text-align:center; font-family:serif'>بلاغ جديد</h1>";
                        echo "<div style='width: 310px; margin-left: auto; margin-right: auto; '><a href='../backend/changeStatus.php?status=2&report_id=$id' class='btn btn-success' style='width:150px; margin-right: 9px; font-family:serif'>  قبول </a>";
                        echo "<button class='btn btn-danger' data-toggle='modal' data-target='#rejectModal' style='width:150px; font-family:serif' data-inline='true'> رفض </button></div>";
                      }else if( $res['stutes'] == 2 ){
                        echo "<h1 style='font-family:serif; text-align:center'>البلاغ قيد العمل</h1>";
                        echo "<a href='../backend/changeStatus.php?status=3&report_id=$id' class='btn btn-success' style='width:150px; margin-left: auto; margin-right: auto; margin-top: 7px;
                    }'> تم الانتهاء </a>";
                      }else if( $res['stutes'] == 3){
                        echo "<h1 style='font-family:serif; font-size:xxx-large; text-align:center'>تم الانتهاء من العمل</h1>";
                      }else{
                        echo "<h1 style='font-family:serif; font-size:xxx-large; text-align:center'>البلاغ مرفوض</h1>";
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
      </section>
        <?php
          $sql = "SELECT a.*,b.title as category,c.title as subCategory from reports as a
          INNER JOIN category as b on (a.cat_id = b.id)
          INNER JOIN sub_category as c on (a.sub_cat_id = c.id)
          where a.id=$id";
          $result =  $conn->query($sql);
          $res = mysqli_fetch_assoc($result);
        ?>
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card" dir="rtl" style="font-family:serif">
                  <form>
                      <div class="row" style="margin:10px;text-algin:right" >
                          <div class="col">
                            <label style="float:right"> رقم البلاغ</label>
                            <input type="text" style="text-align:right" class="form-control" value="<?= $res['id'] ?>" readonly>
                          </div>
                          <div class="col">
                            <label style="float:right">الاسم الكامل</label>
                            <input type="text" style="text-align:right" class="form-control" value="<?= $res['full_name'] ?>" readonly>
                          </div>                         
                      </div>
                      <div class="row" style="margin:10px;">
                          <div class="col">
                            <label style="float:right"> المشكلة</label>
                            <input type="text" style="text-align:right" class="form-control" value="<?= $res['category'] ?>"  readonly>
                          </div>
                          <div class="col">
                            <label style="float:right">نوع المشكلة</label>
                            <input type="text" style="text-align:right" class="form-control" value="<?= $res['subCategory'] ?>" readonly>
                          </div>
                      </div>
                      <div class="row" style="margin:10px;">
                          <div class="col">
                            <label style="float:right"> رقم الهاتف</label>
                            <input type="text" style="text-align:right" class="form-control" value="<?= $res['phone'] ?>" readonly>
                          </div>
                          <div class="col">
                            <label style="float:right">الناريخ والوقت</label>
                            <input type="text" style="text-align:right" class="form-control" value="<?= $res['date'] ?>" readonly>
                          </div>
                      </div>
                      <div class="row" style="margin:10px;">
                          
                          <div class="col">
                            <label style="float:right"> ملاحظات</label>
                            <textarea  style="text-align:right" class="form-control" readonly><?= $res['description'] ?></textarea>
                          </div>
                          <div class="col">
                            
                          </div>
                      </div>
                      
                  </form>
                    <!-- $sql = "select * from reports where id = $id"; -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
      <!-- /.container-fluid -->
            </section>
            <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12" style="padding:50px 50px;background:#fff">  
                  <?php
                    $sql = "SELECT * FROM `pictures` WHERE report_id=$id";
                    $result =  $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                      $url = $row["url"];
                      ?>
                      <img src=<?= $url ?> onclick="imgFullsecreen(this)" style="width:300px;cursor: pointer;box-shadow: 2px 1px 6px;margin-left:20px;margin-top:20px">
                      <?php
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <!-- Modal -->
<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-m">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../backend/changeStatus.php" method="GET" style="direction: rtl;">
       <lable style="float: right;padding-bottom: 10px;">
        الرجاء تعبئة سبب الرفض
        </lable>
        <input type="hidden" name="status" value="4">
        <input type="hidden" name="report_id" value="<?= $id ?>">
        <textarea name="reasion" class="form-control"></textarea>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
          <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
      </form>
      </div>
      
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="modalImg" style="width:100%;heigh:500px">
      </div>
    </div>
  </div>
</div>

  <script>
  function imgFullsecreen(img){
    var url = img.src;
    $("#modalImg").attr("src",url);
    $("#exampleModal").modal()
    debugger;
  }
</script>
</div>
<!-- ./wrapper -->

  <?php include("../../layout/jsPlugins.php");?>
</body>
</html>