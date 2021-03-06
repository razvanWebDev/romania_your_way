<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">Brand logo</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <?php
          $user_image = "user.png";
          if(isset($_SESSION["user_image"])){
            $user_image = $_SESSION["user_image"];
          }
        ?>
        <img src="dist/img/users/<?php echo $user_image; ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php echo $_SESSION["username"]; ?>
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item sidebar-page-header">
          <a href="#" class="nav-link sidebar-page-title">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="admin.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item sidebar-page-header">
          <a href="#" class="nav-link sidebar-page-title">
            <i class="nav-icon fas fa-envelope"></i>
            <p>
              Contact
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="contact.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View messages</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item sidebar-page-header">
          <a href="#" class="nav-link sidebar-page-title">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Users
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="users.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="users.php?source=add_user" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create User</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Simple Link
                </p>
              </a>
            </li> -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>