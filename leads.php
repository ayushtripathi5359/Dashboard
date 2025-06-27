<?php
$pageTitle = "Leads";
include 'htmlopen.php';
include 'header.php';
?>

<div class="container">
    <!-- Enhanced Leads Table -->
    <div class="container">
        <!-- Filter Buttons -->
        <div class="filter-row">
            <button class="filter-btn active">
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

        <!-- Enhanced Leads Table -->
        <div class="dashboard-card-leads">
            <div class="card-header-leads">
                <div class="header-actions-leads">
                    <button class="action-button">
                        <i class="fas fa-plus"></i> Add New Lead
                    </button>
                </div>
            </div>
            <div class="table-container">
                <table class="enhanced-table" id="leadsTable">
                    <thead>
                        <tr>
                            <th class="filter-header">
                                
                                <button class="filter-header-btn">
                                    LEAD
                                    <i class="fas fa-caret-down"></i>
                                </button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search leads...">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked> All Leads</label>
                                        <label><input type="checkbox"> Michael Brown</label>
                                        <label><input type="checkbox"> Ayush</label>
                                        <label><input type="checkbox"> Abhay</label>
                                    </div>
                                    <div class="sort-options">
                                        <button class="sort-btn" data-sort="asc">A-Z <i class="fas fa-arrow-up"></i></button>
                                        <button class="sort-btn" data-sort="desc">Z-A <i class="fas fa-arrow-down"></i></button>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">
                                    ID
                                    <i class="fas fa-caret-down"></i>
                                </button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search IDs...">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="sort-options">
                                        <button class="sort-btn" data-sort="asc">Ascending <i class="fas fa-arrow-up"></i></button>
                                        <button class="sort-btn" data-sort="desc">Descending <i class="fas fa-arrow-down"></i></button>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">
                                    CONTACT
                                    <i class="fas fa-caret-down"></i>
                                </button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search contacts...">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="sort-options">
                                        <button class="sort-btn" data-sort="asc">A-Z <i class="fas fa-arrow-up"></i></button>
                                        <button class="sort-btn" data-sort="desc">Z-A <i class="fas fa-arrow-down"></i></button>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">
                                    STATUS
                                    <i class="fas fa-caret-down"></i>
                                </button>
                                <div class="filter-dropdown">
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked> All Statuses</label>
                                        <label><input type="checkbox"> New</label>
                                        <label><input type="checkbox"> Contacted</label>
                                        <label><input type="checkbox"> Scheduled</label>
                                        <label><input type="checkbox"> Follow Up</label>
                                        <label><input type="checkbox"> Converted</label>
                                    </div>
                                    <div class="sort-options">
                                        <button class="sort-btn" data-sort="asc">A-Z <i class="fas fa-arrow-up"></i></button>
                                        <button class="sort-btn" data-sort="desc">Z-A <i class="fas fa-arrow-down"></i></button>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">
                                    SOURCE
                                    <i class="fas fa-caret-down"></i>
                                </button>
                                <div class="filter-dropdown">
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked> All Sources</label>
                                        <label><input type="checkbox"> Website</label>
                                        <label><input type="checkbox"> Referral</label>
                                        <label><input type="checkbox"> Event</label>
                                        <label><input type="checkbox"> Social</label>
                                    </div>
                                    <div class="sort-options">
                                        <button class="sort-btn" data-sort="asc">A-Z <i class="fas fa-arrow-up"></i></button>
                                        <button class="sort-btn" data-sort="desc">Z-A <i class="fas fa-arrow-down"></i></button>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">
                                    NOTES
                                    <i class="fas fa-caret-down"></i>
                                </button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search notes...">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">
                                    LAST CONTACT
                                    <i class="fas fa-caret-down"></i>
                                </button>
                                <div class="filter-dropdown">
                                    <div class="sort-options">
                                        <button class="sort-btn" data-sort="asc">Oldest First <i class="fas fa-arrow-up"></i></button>
                                        <button class="sort-btn" data-sort="desc">Newest First <i class="fas fa-arrow-down"></i></button>
                                    </div>
                                    <div class="date-range">
                                        <label>From: <input type="date"></label>
                                        <label>To: <input type="date"></label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">UPDATE STATUS</button>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">ACTIONS</button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="lead-profile">
                                    <div class="notes-section">
                                        <div class="created-info">
                                            <b>Created at</b><br>
                                            June 20, 2025, <br>11:20 AM
                                        </div>
                                        <div class="lead-info">
                                            <h4>Michael Brown</h4>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="lead-id-section">#LD003</div>
                            </td>
                            <td>
                                <div class="contact-info">
                                    <div>michael.b@example.com</div>
                                    <div class="secondary">(555) 456-7890</div>
                                </div>
                            </td>
                            <td><span class="status-badge scheduled">Scheduled</span></td>
                            <td><span class="source-tag event">Event</span></td>
                            <td>
                                <div class="notes-section">
                                    <a href="#" class="view-remark">View Remark</a>
                                </div>
                            </td>
                            <td>
                                <div class="time-display">
                                    <div class="primary">Yesterday</div>
                                    <div>11:20 AM</div>
                                </div>
                            </td>
                            <td>
                                <select class="dropdown-btn">
                                    <option>Scheduled</option>
                                    <option>New</option>
                                    <option>Contacted</option>
                                    <option>Follow Up</option>
                                    <option>Converted</option>
                                </select>
                            </td>
                            <td>
                                <div class="action-buttons-leads">
                                    <button class="action-btn phone tooltip" data-tooltip="Call">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="action-btn whatsapp tooltip" data-tooltip="WhatsApp">
                                        <i class="fab fa-whatsapp"></i>
                                    </button>
                                    <button class="action-btn status tooltip" data-tooltip="update status">
                                        <i class="fas fa-refresh"></i>
                                    </button>
                                    <button class="action-btn history tooltip" data-tooltip="History">
                                        <i class="fas fa-history"></i>
                                    </button>
                                    <button class="action-btn reassign tooltip" data-tooltip="Reassign">
                                        <i class="fas fa-user-friends"></i> 
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lead-profile">
                                    <div class="notes-section">
                                        <div class="created-info">
                                            <b>Created at</b><br>
                                            June 20, 2025, <br>11:20 AM
                                        </div>
                                        <div class="lead-info">
                                            <h4>Ayush</h4>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="lead-id-section">#LD004</div>
                            </td>
                            <td>
                                <div class="contact-info">
                                    <div>ayush@example.com</div>
                                    <div class="secondary">(555) 789-0123</div>
                                </div>
                            </td>
                            <td><span class="status-badge converted">Converted</span></td>
                            <td><span class="source-tag website">Website</span></td>
                            <td>
                                <div class="notes-section">
                                    <a href="#" class="view-remark">View Remark</a>
                                </div>
                            </td>
                            <td>
                                <div class="time-display">
                                    <div class="primary">2 days ago</div>
                                    <div>2:15 PM</div>
                                </div>
                            </td>
                            <td>
                                <select class="dropdown-btn">
                                    <option>Converted</option>
                                    <option>New</option>
                                    <option>Contacted</option>
                                    <option>Scheduled</option>
                                    <option>Follow Up</option>
                                </select>
                            </td>
                            <td>
                                <div class="action-buttons-leads">
                                    <button class="action-btn phone tooltip" data-tooltip="Call">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="action-btn whatsapp tooltip" data-tooltip="WhatsApp">
                                        <i class="fab fa-whatsapp"></i>
                                    </button>
                                    <button class="action-btn status tooltip" data-tooltip="update status">
                                        <i class="fas fa-refresh"></i>
                                    </button>
                                    <button class="action-btn history tooltip" data-tooltip="History">
                                        <i class="fas fa-history"></i>
                                    </button>
                                    <button class="action-btn reassign tooltip" data-tooltip="Reassign">
                                        <i class="fas fa-user-friends"></i> 
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lead-profile">
                                    <div class="notes-section">
                                        <div class="created-info">
                                            <b>Created at</b><br>
                                            June 20, 2025, <br>11:20 AM
                                        </div>
                                        <div class="lead-info">
                                            <h4>Abhay</h4>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="lead-id-section">#LD005</div>
                            </td>
                            <td>
                                <div class="contact-info">
                                    <div>abhay@example.com</div>
                                    <div class="secondary">(555) 234-5678</div>
                                </div>
                            </td>
                            <td><span class="status-badge follow-up">Follow Up</span></td>
                            <td><span class="source-tag website">Website</span></td>
                            <td>
                                <div class="notes-section">
                                    <a href="#" class="view-remark">View Remark</a>
                                </div>
                            </td>
                            <td>
                                <div class="time-display">
                                    <div class="primary">3 days ago</div>
                                    <div>4:30 PM</div>
                                </div>
                            </td>
                            <td>
                                <select class="dropdown-btn">
                                    <option>Follow Up</option>
                                    <option>New</option>
                                    <option>Contacted</option>
                                    <option>Scheduled</option>
                                    <option>Converted</option>
                                </select>
                            </td>
                            <td>
                                <div class="action-buttons-leads">
                                    <button class="action-btn phone tooltip" data-tooltip="Call">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="action-btn whatsapp tooltip" data-tooltip="WhatsApp">
                                        <i class="fab fa-whatsapp"></i>
                                    </button>
                                    <button class="action-btn status tooltip" data-tooltip="update status">
                                        <i class="fas fa-refresh"></i>
                                    </button>
                                    <button class="action-btn history tooltip" data-tooltip="History">
                                        <i class="fas fa-history"></i>
                                    </button>
                                    <button class="action-btn reassign tooltip" data-tooltip="Reassign">
                                        <i class="fas fa-user-friends"></i> 
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lead-profile">
                                    <div class="notes-section">
                                        <div class="created-info">
                                            <b>Created at</b><br>
                                            June 20, 2025, <br>11:20 AM
                                        </div>
                                        <div class="lead-info">
                                            <h4>Lisa Anderson</h4>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="lead-id-section">#LD006</div>
                            </td>
                            <td>
                                <div class="contact-info">
                                    <div>lisa.a@example.com</div>
                                    <div class="secondary">(555) 345-6789</div>
                                </div>
                            </td>
                            <td><span class="status-badge new">New</span></td>
                            <td><span class="source-tag referral">Referral</span></td>
                            <td>
                                <div class="notes-section">
                                    <a href="#" class="view-remark">View Remark</a>
                                </div>
                            </td>
                            <td>
                                <div class="time-display">
                                    <div class="primary">1 hour ago</div>
                                    <div>2:30 PM</div>
                                </div>
                            </td>
                            <td>
                                <select class="dropdown-btn">
                                    <option>New</option>
                                    <option>Contacted</option>
                                    <option>Scheduled</option>
                                    <option>Follow Up</option>
                                    <option>Converted</option>
                                </select>
                            </td>
                            <td>
                                <div class="action-buttons-leads">
                                    <button class="action-btn phone tooltip" data-tooltip="Call">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="action-btn whatsapp tooltip" data-tooltip="WhatsApp">
                                        <i class="fab fa-whatsapp"></i>
                                    </button>
                                    <button class="action-btn status tooltip" data-tooltip="update status">
                                        <i class="fas fa-refresh"></i>
                                    </button>
                                    <button class="action-btn history tooltip" data-tooltip="History">
                                        <i class="fas fa-history"></i>
                                    </button>
                                    <button class="action-btn reassign tooltip" data-tooltip="Reassign">
                                        <i class="fas fa-user-friends"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    // Initialize DataTable with enhanced settings
    $('#leadsTable').DataTable({
        pageLength: 10,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        order: [[6, 'desc']], // Sort by last contact date
        responsive: true,
        dom: '<"top-container"<"search-and-button"f><"filter-button"><"add-button">>rt<"bottom"lip><"clear">',
        language: {
            search: "",
            lengthMenu: "Show _MENU_ leads per page",
            info: "Showing _START_ to _END_ of _TOTAL_ leads",
            infoEmpty: "No leads found",
            infoFiltered: "(filtered from _MAX_ total leads)",
            paginate: {
                first: "First",
                last: "Last",
                next: "Next",
                previous: "Previous"
            }
        },
        columnDefs: [
            { targets: [8, 7], orderable: false }, // Actions and Update Status columns not sortable
            { targets: [0, 1, 2, 3, 4, 5, 6], orderable: false }, // Disable default sorting for all filterable columns
            { targets: [0, 1, 2], className: 'text-center' }
        ],
        initComplete: function() {
            // Move the search box to the left
            $('.dataTables_filter').css('float', 'left');
            
            // Add the filter button
            $('.filter-button').html('<button class="filter-btn"><i class="fas fa-filter"></i> Filter</button>');
            
            // Move the length menu below the table
            $('.dataTables_length').css({
                'float': 'none',
                'text-align': 'left',
                'margin-top': '20px'
            });
            
            // Style the pagination controls
            $('.dataTables_paginate').css({
                'float': 'none',
                'text-align': 'center',
                'margin-top': '20px'
            });
            
            // Style the info text
            $('.dataTables_info').css({
                'float': 'none',
                'text-align': 'left',
                'margin-top': '20px'
            });
            
            // Move the add button
            $('.add-button').html($('.header-actions-leads').detach());
        }
    });

    // Enhanced Action button functionality with animations
    $('.action-btn.phone').click(function() {
        const row = $(this).closest('tr');
        const leadName = row.find('.lead-info h4').text();
        const phone = row.find('.contact-info .secondary').text();
        
        // Add click animation
        $(this).addClass('clicked');
        setTimeout(() => {
            $(this).removeClass('clicked');
        }, 300);
        
        alert(`Calling ${leadName} at ${phone}`);
    });

    // Filter button functionality
    $('.filter-button button').click(function() {
        // Add click animation
        $(this).addClass('clicked');
        setTimeout(() => {
            $(this).removeClass('clicked');
        }, 300);
        
        // Toggle all filter dropdowns
        $('.filter-header').toggleClass('active');
    });

    // WhatsApp button functionality
    $('.action-btn.whatsapp').click(function() {
        const row = $(this).closest('tr');
        const leadName = row.find('.lead-info h4').text();
        const phone = row.find('.contact-info .secondary').text().replace(/[^\d]/g, '');
        
        // Add click animation
        $(this).addClass('clicked');
        setTimeout(() => {
            $(this).removeClass('clicked');
        }, 300);
        
        window.open(`https://wa.me/${phone}`, '_blank');
    });

    // History button functionality
    $('.action-btn.history').click(function() {
        const row = $(this).closest('tr');
        const leadId = row.find('.lead-id-section').text();
        const leadName = row.find('.lead-info h4').text();
        
        // Add click animation
        $(this).addClass('clicked');
        setTimeout(() => {
            $(this).removeClass('clicked');
        }, 300);
        
        alert(`Opening lead history for ${leadName} (${leadId})`);
    });

    // Enhanced Reassign button functionality
    $('.action-btn.reassign').click(function() {
        const row = $(this).closest('tr');
        const leadName = row.find('.lead-info h4').text();
        
        // Add click animation
        $(this).addClass('clicked');
        setTimeout(() => {
            $(this).removeClass('clicked');
        }, 300);
        
        alert(`Reassigning lead: ${leadName}`);
    });

    // Enhanced View remark functionality
    $('.view-remark').click(function(e) {
        e.preventDefault();
        const row = $(this).closest('tr');
        const leadName = row.find('.lead-info h4').text();
        
        // Add click animation
        $(this).addClass('clicked');
        setTimeout(() => {
            $(this).removeClass('clicked');
        }, 300);
        
        alert(`Viewing remark for ${leadName}`);
    });

    // Enhanced Status update functionality
    $('select.dropdown-btn').change(function() {
        const row = $(this).closest('tr');
        const leadName = row.find('.lead-info h4').text();
        const newStatus = $(this).val();
        
        console.log(`Status updated for ${leadName}: ${newStatus}`);
        
        // Update the status badge with animation
        const statusBadge = row.find('.status-badge');
        statusBadge.addClass('updating');
        
        setTimeout(() => {
            statusBadge.removeClass().addClass('status-badge ' + newStatus.toLowerCase().replace(' ', '-'));
            statusBadge.text(newStatus);
            statusBadge.removeClass('updating');
        }, 300);
    });

    // Enhanced Add new lead functionality
    $('.action-button').click(function() {
        // Add click animation
        $(this).addClass('clicked');
        setTimeout(() => {
            $(this).removeClass('clicked');
        }, 300);
        
        alert('Opening Add New Lead form...');
    });

    // Enhanced hover effects for table rows
    $('.enhanced-table tbody tr').hover(
        function() {
            $(this).addClass('row-hover');
        },
        function() {
            $(this).removeClass('row-hover');
        }
    );

    // Enhanced lead avatar hover effect
    $('.lead-avatar').hover(
        function() {
            $(this).addClass('avatar-hover');
        },
        function() {
            $(this).removeClass('avatar-hover');
        }
    );
});

// Toggle filter dropdowns
$('.filter-header-btn').click(function(e) {
    e.stopPropagation();
    e.preventDefault(); // Prevent any default sorting behavior
    const header = $(this).closest('.filter-header');
    
    // Close all other dropdowns
    $('.filter-header').not(header).removeClass('active');
    
    // Toggle current dropdown
    header.toggleClass('active');
});

// Close dropdowns when clicking outside
$(document).click(function() {
    $('.filter-header').removeClass('active');
});

// Sort functionality - ONLY through dropdown buttons
$('.sort-btn').click(function(e) {
    e.stopPropagation();
    const sortDirection = $(this).data('sort');
    const columnHeader = $(this).closest('.filter-header');
    const columnIndex = columnHeader.index();
    
    // Remove active class from all sort buttons in this dropdown
    $(this).siblings('.sort-btn').removeClass('active');
    // Add active class to clicked button
    $(this).addClass('active');
    
    // Get the DataTable instance
    const table = $('#leadsTable').DataTable();
    
    // Sort the table
    table.order([columnIndex, sortDirection]).draw();
    
    // Close the dropdown after sorting
    columnHeader.removeClass('active');
});

// Filter functionality for checkboxes
$('.filter-options input[type="checkbox"]').change(function() {
    const columnHeader = $(this).closest('.filter-header');
    const columnIndex = columnHeader.index();
    const checkedValues = [];
    
    // Get all checked values
    $(this).closest('.filter-options').find('input:checked').each(function() {
        if ($(this).parent().text().trim() !== "All Leads" && 
            $(this).parent().text().trim() !== "All Statuses" &&
            $(this).parent().text().trim() !== "All Sources") {
            checkedValues.push($(this).parent().text().trim());
        }
    });
    
    // If "All" is checked or no specific filters selected, show all
    if (checkedValues.length === 0 || 
        $(this).closest('.filter-options').find('input:checked').filter(function() {
            return $(this).parent().text().trim() === "All Leads" || 
                   $(this).parent().text().trim() === "All Statuses" ||
                   $(this).parent().text().trim() === "All Sources";
        }).length > 0) {
        $('#leadsTable').DataTable().column(columnIndex).search('').draw();
    } else {
        // Create regex pattern for filtering
        const searchPattern = checkedValues.join('|');
        $('#leadsTable').DataTable().column(columnIndex).search(searchPattern, true, false).draw();
    }
});

// Search functionality
$('.filter-search input').on('keyup', function() {
    const columnHeader = $(this).closest('.filter-header');
    const columnIndex = columnHeader.index();
    const searchValue = $(this).val();
    
    $('#leadsTable').DataTable().column(columnIndex).search(searchValue).draw();
});

// Date range filtering
$('.date-range input').change(function() {
    const columnHeader = $(this).closest('.filter-header');
    const columnIndex = columnHeader.index();
    const fromDate = $('.date-range input').eq(0).val();
    const toDate = $('.date-range input').eq(1).val();
    
    // Custom filtering function for date range
    $.fn.dataTable.ext.search.push(
        function(settings, data, dataIndex) {
            const date = new Date(data[columnIndex]);
            const from = new Date(fromDate);
            const to = new Date(toDate);
            
            if ((fromDate === '' && toDate === '') || 
                (fromDate === '' && date <= to) || 
                (toDate === '' && date >= from) || 
                (date >= from && date <= to)) {
                return true;
            }
            return false;
        }
    );
    
    $('#leadsTable').DataTable().draw();
    $.fn.dataTable.ext.search.pop(); // Remove the filter so it doesn't apply to other columns
});
</script>

<?php include 'htmlclose.php'; ?>