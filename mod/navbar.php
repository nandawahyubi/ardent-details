
  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userdropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                <?php echo ucwords($_SESSION['name']); ?>
              </span>
              <i class="fas fa-user text-dark" style="font-size: 25px; display: block;"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userdropdown" style="font-family: 'Poppins-LightItalic';">
              <a class="dropdown-item" href="profile.php">
                <i class="fas fa-user fa-sm fa-fw mr-3 text-gray-700"></i>
                Profile
              </a>
              <a class="dropdown-item" href="ubah-password.php">
                <i class="fas fa-lock fa-sm fa-fw mr-3 text-gray-700"></i>
                Ubah Password
              </a>
              <a class="dropdown-item" id="btn-logout" style="cursor: pointer">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-3 text-gray-700"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- End of Topbar -->