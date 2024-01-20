<?php
if(session_id() == '') {
  session_start();
}
if(!isset($_SESSION["email"]) || $_SESSION["email"] == "")
{
  header("Location: /ballegh2/login.php"); /* Redirect browser */
}
?>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/ballegh2/index.php" class="nav-link">الرئيسية</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">تواصل</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown" >
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/ballegh2/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/ballegh2/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/ballegh2/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
      </ul>
    </nav>
    
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside direction:rtl class="main-sidebar sidebar-dark-primary elevation-4" >
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link" style="text-align:center">
        <img src="/ballegh2/imgg/bal.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 2.8">
        <span class="brand-text font-weight-light" style="font-family:serif; font-size:xx-large">.بَـلِّـــغ •</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/ballegh2/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/ballegh2/index.php" class="nav-link active">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  الشاشة الرئيسية
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/ballegh2/pages/frontend/reports.php" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  البلاغات
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/ballegh2/pages/frontend/reports.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>جديد</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/ballegh2/pages/frontend/in_progres.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>قيد العمل</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/ballegh2/pages/frontend/finished.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>منتهي</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/ballegh2/pages/frontend/rejected.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>مرفوض</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/ballegh2/pages/frontend/all_reports.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>جميع البلاغات</p>
                  </a>
                </li>
                
              </ul>
            </li>
            <?php
            if($_SESSION["type"] == 1)
            {
            ?>
            
            <li class="nav-item">
              <a href="/ballegh2/pages/frontend/category.php" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  الاقسام
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/ballegh2/pages/frontend/users.php" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  المستخدمين
                </p>
              </a>
            </li>
            <?php
            }
            ?>
            <li class="nav-item">
              <a href="/ballegh2/pages/backend/logout.php" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  تسجيل خروج
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

