<!DOCTYPE html>
<html>
        <head>
        <?php include('layout/head.php'); ?>
        <?php include("../../config/db.php");?>
        <title>تسجيل الدخول</title>
        <link rel="stylesheet" type="text/css" href="csss/myStyle.css">
        </head>
        <body class="login" style="background-image: url('imgg/opp.jpeg');"> 
            <div class="form">
                <p><img src="imgg/bal.jpeg" style="width: 100px; "></p>
                <form method="POST" action="/ballegh2/pages/backend/login.php">
                    <input type="email" name="username" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <button href="plugins/index.php">دخول</button>
                </form>
        </div>
        </body>
</html>