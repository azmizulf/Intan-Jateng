<!-- resources/views/components/navbar.blade.php -->
 <!-- Navbar -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a class="navbar-brand brand-logo" href="/index"><img src="/assets/img/logo-full.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="/index"><img src="/assets/img/logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <i class="fa fa-user-circle" ></i>
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Admin Provinsi</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Backup Database </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>        
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-format-line-spacing"></i>
                <h6 class="p-3 mb-0">Mode</h6>

              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Mode</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" style="background:linear-gradient(to right, #dffdc5, #feffd8)" href="/index">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="fa fa-leaf"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Padi</h6>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" href="/index-jagung">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="fa fa-tree"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Jagung</h6>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item"href="/index-ubin">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-ubinan">
                      <i class="fa fa-cubes"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Ubinan</h6>
                  </div>
                </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/index">
                <span class="menu-title">Dashboard</span>
                <i class="fa fa-home"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kondef">
                <span class="menu-title">Kondef</span>
                <i class="fa fa-sitemap"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Amatan</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-bullseye"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/unggah">Unggah</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/riwayat">Riwayat</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/validasi">
                <span class="menu-title">Validasi</span>
                <i class="fa fa-list-alt"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/panduan">
                <span class="menu-title">Panduan</span>
                <i class="fa fa-book"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- Navbar -->