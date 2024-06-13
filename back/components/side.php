<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../dashboard/dashboard.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MHS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="dash.php" class="d-block">Hi user</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<?php

if (userdata($con, "Mode") == 0) {

?>

<li class="nav-item">
                <a href="../dashboard/dashboard.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../chat/chat.php" class="nav-link">
                <i class="nav-icon fas fa-comment"></i>
                <p>
                    Chat
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../discussion/discussion.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Discussion
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../doctors/assign.php" class="nav-link">
                <i class="nav-icon fas fa-stethoscope"></i>
                <p>
                    Assign Doctors
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>
            </li>

<?php

}elseif (userdata($con, "Mode") == 1) {

  ?>

<li class="nav-item">
                <a href="../dashboard/dashboard.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../chat/doc_chat.php" class="nav-link">
                <i class="nav-icon fas fa-comment"></i>
                <p>
                    Chat
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>
            </li>

  <?php

}

?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>