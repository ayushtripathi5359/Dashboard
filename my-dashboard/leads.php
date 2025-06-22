<?php
$pageTitle = "Leads";
include 'htmlopen.php';
include 'header.php';
?>

<!-- Updated Tab Filters with proper count structure -->
<div class="tab-row">
  <button class="tab-btn active">
    My Leads <span class="count">46</span>
  </button>
  <button class="tab-btn booked">
    Booked <span class="count">0</span>
  </button>
  <button class="tab-btn">
    Today FollowUp's <span class="count">0</span>
  </button>
  <button class="tab-btn dropped">
    Dropped <span class="count">10</span>
  </button>
  <button class="tab-btn ads">
    Ads <span class="count">22</span>
  </button>
  <button class="tab-btn">
    SHI-D <span class="count">30</span>
  </button>
</div>

<!-- Modern Filter Buttons - New Design -->
<div class="filter-row">
  <button class="filter-btn active">
    <i class="fas fa-user"></i> Lead
  </button>
  <button class="filter-btn">
    <i class="fas fa-check-circle"></i> Active <span class="count">36</span>
  </button>
  <button class="filter-btn">
    <i class="fas fa-star"></i> New <span class="count">0</span>
  </button>
  <button class="filter-btn">
    <i class="fas fa-clock"></i> Pending <span class="count">26</span>
  </button>
  <button class="filter-btn">
    <i class="fas fa-arrow-up"></i> Follow Up <span class="count">3</span>
  </button>
  <button class="filter-btn">
    <i class="fas fa-filter"></i> Filter Status
  </button>
</div>


  <!-- Leads Table -->
  <div class="dashboard-row">
    <div class="dashboard-card standings-card">
      <div class="card-header">
        <h3 class="card-title">All Leads</h3>
        <div>
          <button class="action-button small">Add New Lead</button>
          <a href="#" class="view-link">Export</a>
        </div>
      </div>
      <div class="standings-table-container">
        <table id="leadsTable" class="standings-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Assign Project</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                Ganesh Babu (Unattached)<br>XXXXXXXXXXX<br><small>Created At: 2024-10-18 14:45:05</small>
              </td>
              <td>No 2nd<br><span style="color: orange;">● Pending</span></td>
              <td>
                <i class="fas fa-phone text-green-600"></i>
                <i class="fas fa-envelope text-blue-600"></i>
                <i class="fas fa-comment-dots text-teal-600"></i>
                <i class="fas fa-ban text-red-600"></i>
              </td>
            </tr>
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</main>

<!-- Include DataTables and scripts -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


<?php include 'htmlclose.php'; ?>