<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('../../layout/head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../../csss/myStyle.css">
</head>
<body class="login" style="background-image: url('../../imgg/opp.jpeg');" style="direction: rtl;">

  
<?php include("../../config/db.php");?>
  <div class="form" style="margin-top:200px;max-width:500px">
      <p><img src="../../imgg/bal.jpeg" style="width: 100px; "></p>
      <form action="../../api/v1/request.php" method="post" enctype="multipart/form-data">
              <div class="card-body" style="direction: rtl;">
              <div class="form-group">
              <select class="form-control" name="cat" required>
                <option value="">الرجاء اختيار القسم</option>
                      <?php
                        $sql = "SELECT * FROM `category`";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                            // print_r($row);die();
                                echo "<option value=$row[id]>$row[title]</option>";
                            }
                        }                        
                        $conn->close();
                      ?>
               </select>           
                </div>
                <div class="form-group">
                  <select class="form-control" name="sub_cat" required>
                    <option value="">الرجاء اختيار الفرع</option>
                    <option value="1">الرجاء الاول</option>
                    <option value="2">الفرع الثاني</option>
                  </select>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="desc" rows="4" cols="50" placeholder="ادخل تفاصيل المشكلة" required></textarea>
                </div>
                <div class="form-group" >
                  <input type="number" class="form-control" name="phone" rows="4" cols="50" placeholder=" ادخل رقم الهاتف" required>
                </div>
                <div class="form-group">
                  <input type="file" id="myFile" name="file[]" multiple required> 
                  <input type="hidden" name="lat" value="39.4275654643534">               
                  <input type="hidden" name="long" value="9.4275654643534">               
                </div>
              </div>
              <button type="submit" class="btn btn-primary">ارسال</button>
          </form>
      </form>
  </div>
        
  <?php include("../../layout/jsPlugins.php");?>
</body>
</html>