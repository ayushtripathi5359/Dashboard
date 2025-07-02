<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$isLeadsPage = $currentPage == 'leads.php';
?>

  <!-- Enhanced Sidebar -->
  <aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
      <button class="sidebar-close-btn" id="sidebarCloseBtn" style="display: none;">
        <i class="fas fa-times"></i>
      </button>
      <div>
        <img class="logo" src="assets/shilogo.webp" alt="">
      </div>
    </div>

    <div class="nav-section">
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="dashboard.php" class="nav-link <?php echo ($_SERVER['PHP_SELF'] == '/dashboard.php' || basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>" data-page="dashboard">
            <div class="nav-icon">
              <i class="fas fa-th-large"></i>
            </div>
            <span class="nav-text">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="bookings.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'bookings.php') ? 'active' : ''; ?>" data-page="bookings">
            <div class="nav-icon">
              <i class="fas fa-calendar-check"></i>
            </div>
            <span class="nav-text">Bookings</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="leads.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'leads.php') ? 'active' : ''; ?>" data-page="leads">
            <div class="nav-icon">
              <i class="fas fa-users"></i>
            </div>
            <span class="nav-text">Leads</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="eoi.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'eoi.php') ? 'active' : ''; ?>" data-page="eoi">
            <div class="nav-icon">
              <i class="fas fa-file-contract"></i>
            </div>
            <span class="nav-text">EOI</span>
          </a>
        </li>
      </ul>

      <ul class="nav-menu">
        <li class="nav-item theme-toggle-item">
  <a href="#" class="nav-link" id="themeToggleLink">
    <div class="nav-icon">
        <i class="fas fa-moon" id="themeIcon"></i>
    </div>
    <span class="nav-text">Dark Mode</span>
    <label class="theme-switch">
        <input type="checkbox" id="themeToggle">
        <span class="slider"></span>
    </label>
</a>
</li>
        
        <li class="nav-item">
          <a href="logout.php" class="nav-link" data-page="logout">
            <div class="nav-icon">
              <i class="fas fa-sign-out-alt"></i>
            </div>
            <span class="nav-text">Logout</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="sidebar-footer">
    </div>
  </aside>

  <main class="main-content <?php echo $isLeadsPage ? 'leads-main-content' : ''; ?>" id="mainContent">
<header class="header <?php echo $isLeadsPage ? 'leads-header' : ''; ?>">
    <div class="header-left">
        <?php if (!$isLeadsPage): ?>
            <div class="welcome-text">Welcome back, Ayush👋</div>
        <?php endif; ?>
        <h1 class="page-title <?php echo $isLeadsPage ? 'leads-title' : ''; ?>">
            <?php echo isset($pageTitle) ? $pageTitle : 'Dashboard'; ?>
        </h1>
        <?php if ($isLeadsPage): ?>
            <div class="tab-row">
                <button class="filter-btn active">
                    My Leads <span class="count">46</span>
                </button>
                <button class="filter-btn booked">
                    Booked <span class="count">0</span>
                </button>
                <button class="filter-btn">
                    Today FollowUp's <span class="count">0</span>
                </button>
                <button class="filter-btn dropped">
                    Dropped <span class="count">10</span>
                </button>
                <button class="filter-btn ads">
                    Ads <span class="count">22</span>
                </button>
                <button class="filter-btn">
                    SHI-D <span class="count">30</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
    
    <div class="header-right">
        <button class="header-btn tooltip" id="searchBtn" data-tooltip="Search">
          <i class="fas fa-search"></i>
        </button>
        
        <button class="header-btn tooltip" id="notificationBtn" data-tooltip="Notifications">
          <i class="fas fa-bell"></i>
          <div class="notification-badge"></div>
        </button>
        
        <button class="header-btn tooltip" id="mobileMenuBtn" data-tooltip="Menu" style="display: none;">
          <i class="fas fa-bars"></i>
        </button>
        
        <div class="user-profile-sidebar">
          <img class="user-avatar-small" src="assets/ayu.jpg" alt="">
          <div class="user-info">
            <div class="user-name-small">Ayush Tripathi</div>
          </div>
        </div>
      </div>
    </header>