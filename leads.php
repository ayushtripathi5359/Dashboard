<?php
$pageTitle = "Leads";
include 'htmlopen.php';
include 'header.php';
?>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


<div class="container">
    <!-- Enhanced Leads Table -->
    <div class="container">
        <!-- Filter Buttons -->
        <div class="filter-row">
            <button class="filter-btn active"><i class="fas fa-check-circle"></i> Active <span class="count">36</span></button>
            <button class="filter-btn"><i class="fas fa-star"></i> New <span class="count">0</span></button>
            <button class="filter-btn"><i class="fas fa-clock"></i> Pending <span class="count">26</span></button>
            <button class="filter-btn"><i class="fas fa-arrow-up"></i> Follow Up <span class="count">3</span></button>
            <button class="filter-btn"><i class="fas fa-filter"></i> Filter Status</button>
        </div>

        <!-- Enhanced Leads Table -->
        <div class="dashboard-card-leads">
            <div class="card-header-leads">
            </div>
            
            <!-- Fixed Controls Container -->
            <div class="table-controls-fixed">
                <div id="tableControlsContainer"></div>
            </div>
            
            <!-- Scrollable Table Container -->
            <div class="table-container" >
                <table class="enhanced-table" id="leadsTable">
                    <thead>
                        <tr>
                            <th class="expand-btn-cell"></th>
                            <th class="filter-header ">
                                <button class="filter-header-btn">LEAD <i class="fas fa-caret-down"></i></button>
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
                                <button class="filter-header-btn">ID <i class="fas fa-caret-down"></i></button>
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
                                <button class="filter-header-btn">CONTACT <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search contacts...">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">STATUS <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked> All Statuses</label>
                                        <label><input type="checkbox"> New</label>
                                        <label><input type="checkbox"> Contacted</label>
                                        <label><input type="checkbox"> Scheduled</label>
                                        <label><input type="checkbox"> Follow Up</label>
                                        <label><input type="checkbox"> Converted</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">SOURCE <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked> All Sources</label>
                                        <label><input type="checkbox"> Website</label>
                                        <label><input type="checkbox"> Event</label>
                                        <label><input type="checkbox"> Referral</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">NOTES <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search notes...">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">LAST CONTACT <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search last contact...">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">UPDATE STATUS <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked> All</label>
                                        <label><input type="checkbox"> New</label>
                                        <label><input type="checkbox"> Contacted</label>
                                        <label><input type="checkbox"> Scheduled</label>
                                        <label><input type="checkbox"> Follow Up</label>
                                        <label><input type="checkbox"> Converted</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">ACTIONS <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked> All Actions</label>
                                        <label><input type="checkbox"> Call</label>
                                        <label><input type="checkbox"> WhatsApp</label>
                                        <label><input type="checkbox"> History</label>
                                        <label><input type="checkbox"> Reassign</label>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table rows will be populated by DataTables -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="floating-add-btn">
        <button class="action-button"><i class="fas fa-plus"></i> Add New Lead</button>
    </div>
        <!-- Mobile Bottom Navigation -->
    <div class="mobile-bottom-nav">
        <button class="mobile-nav-btn filter-btn-mobile">
            <i class="fas fa-filter"></i>
            <span>Filter</span>
        </button>
        <button class="mobile-nav-btn add-btn-mobile">
            <i class="fas fa-plus"></i>
    
        </button>
        <button class="mobile-nav-btn columns-btn-mobile">
            <i class="fas fa-columns"></i>
            <span>Columns</span>
        </button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

<script>
$(document).ready(function() {
    if ($.fn.DataTable.isDataTable('#leadsTable')) {
        $('#leadsTable').DataTable().clear().destroy();
    }

    // Initialize DataTable with data
    var table = $('#leadsTable').DataTable({
        
        data: [
            {
                "id": "LD003",
                "name": "Michael Brown",
                "profilePic": "https://picsum.photos/100/100?random=1",
                "created": "June 20, 2025, <br>11:20 AM",
                "email": "michael.b@example.com",
                "phone": "(555) 456-7890",
                "status": "Scheduled",
                "source": "Event",
                "notes": "Interested in premium package",
                "lastContact": "Yesterday",
                "lastContactTime": "11:20 AM"
            },
            {
                "id": "LD004",
                "name": "Ayush",
                "profilePic": "https://picsum.photos/100/100?random=2",
                "created": "June 20, 2025, <br>11:20 AM",
                "email": "ayush@example.com",
                "phone": "(555) 789-0123",
                "status": "Converted",
                "source": "Website",
                "notes": "Signed up for service",
                "lastContact": "2 days ago",
                "lastContactTime": "2:15 PM"
            },
            {
                "id": "LD005",
                "name": "Abhay",
                "profilePic": "https://picsum.photos/100/100?random=3",
                "created": "June 20, 2025, <br>11:20 AM",
                "email": "abhay@example.com",
                "phone": "(555) 234-5678",
                "status": "Follow Up",
                "source": "Website",
                "notes": "Requested callback",
                "lastContact": "3 days ago",
                "lastContactTime": "4:30 PM"
            },
                        {
                "id": "LD003",
                "name": "Michael Brown",
                "profilePic": "https://picsum.photos/100/100?random=1",
                "created": "June 20, 2025, <br>11:20 AM",
                "email": "michael.b@example.com",
                "phone": "(555) 456-7890",
                "status": "Scheduled",
                "source": "Event",
                "notes": "Interested in premium package",
                "lastContact": "Yesterday",
                "lastContactTime": "11:20 AM"
            },
            {
                "id": "LD004",
                "name": "Ayush",
                "profilePic": "https://picsum.photos/100/100?random=2",
                "created": "June 20, 2025, <br>11:20 AM",
                "email": "ayush@example.com",
                "phone": "(555) 789-0123",
                "status": "Converted",
                "source": "Website",
                "notes": "Signed up for service",
                "lastContact": "2 days ago",
                "lastContactTime": "2:15 PM"
            },
            {
                "id": "LD005",
                "name": "Abhay",
                "profilePic": "https://picsum.photos/100/100?random=3",
                "created": "June 20, 2025, <br>11:20 AM",
                "email": "abhay@example.com",
                "phone": "(555) 234-5678",
                "status": "Follow Up",
                "source": "Website",
                "notes": "Requested callback",
                "lastContact": "3 days ago",
                "lastContactTime": "4:30 PM"
            },
                        {
                "id": "LD003",
                "name": "Michael Brown",
                "profilePic": "https://picsum.photos/100/100?random=1",
                "created": "June 20, 2025, <br>11:20 AM",
                "email": "michael.b@example.com",
                "phone": "(555) 456-7890",
                "status": "Scheduled",
                "source": "Event",
                "notes": "Interested in premium package",
                "lastContact": "Yesterday",
                "lastContactTime": "11:20 AM"
            },
            {
                "id": "LD004",
                "name": "Ayush",
                "profilePic": "https://picsum.photos/100/100?random=2",
                "created": "June 20, 2025, <br>11:20 AM",
                "email": "ayush@example.com",
                "phone": "(555) 789-0123",
                "status": "Converted",
                "source": "Website",
                "notes": "Signed up for service",
                "lastContact": "2 days ago",
                "lastContactTime": "2:15 PM"
            },
            {
                "id": "LD005",
                "name": "Abhay",
                "profilePic": "https://picsum.photos/100/100?random=3",
                "created": "June 20, 2025, <br>11:20 AM",
                "email": "abhay@example.com",
                "phone": "(555) 234-5678",
                "status": "Follow Up",
                "source": "Website",
                "notes": "Requested callback",
                "lastContact": "3 days ago",
                "lastContactTime": "4:30 PM"
            }
        ],
        responsive: true,
        ordering: false,
        dom: '<"top-container"<"search-container"f><"button-container"B><"length-container"l>>rt<"bottom-container"ip>',
        buttons: [
            {
                text: '<i class="fas fa-filter"></i> Filter',
                className: 'dt-button filter-btn',
                action: function(e, dt, node, config) {
                    // Toggle your filter panel here
                    $('.filter-panel').toggleClass('open');
                }
            },
            {
                extend: 'colvis',
                text: '<i class="fas fa-columns"></i> Columns',
                className: 'dt-button columns-btn',
                titleAttr: 'Column Visibility'
            }
        ],
        lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        pageLength: 10,
        
        order: [[7, 'desc']], // Initial sort by last contact date
        columns: [
    { 
        data: null, // Expand Button
        defaultContent: '<button class="expand-row-btn" aria-label="Expand row"><i class="fas fa-plus"></i></button>',
        className: 'expand-btn-cell',
        orderable: false
    },
    { 
        data: null, // Lead Profile with Avatar and Name
        className: 'lead-profile-cell',
        render: function(data, type, row) {
            return `
                <div class="lead-profile">
                    <img src="${row.profilePic}" alt="${row.name}" class="lead-avatar">
                    <div class="notes-section">
                        <div class="created-info"><b>Created at</b><br>${row.created}</div>
                        <div class="lead-info">
                            <div><h4>${row.name}</h4></div>
                        </div>
                    </div>
                </div>
            `;
        }
    },
    { 
        data: "id",
        render: function(data) {
            return `<div class="lead-id-section">#${data}</div>`;
        }
    },
    { 
        data: null, 
        render: function(data, type, row) {
            return `
                <div class="contact-info">
                    <div>${row.email}</div>
                    <div class="secondary">${row.phone}</div>
                </div>
            `;
        }
    },
    { 
        data: "status",
        render: function(data) {
            return `<span class="status-badge ${data.toLowerCase().replace(' ', '-')}">${data}</span>`;
        }
    },
    { 
        data: "source",
        render: function(data) {
            return `<span class="source-tag ${data.toLowerCase()}">${data}</span>`;
        }
    },
    { 
        data: "notes",
        render: function(data) {
            return `<div class="notes-section"><a href="#" class="view-remark">View Remark</a></div>`;
        }
    },
    { 
        data: null,
        render: function(data, type, row) {
            return `
                <div class="time-display">
                    <div class="primary">${row.lastContact}</div>
                    <div>${row.lastContactTime}</div>
                </div>
            `;
        }
    },
    { 
        data: "status",
        render: function(data) {
            return `
                <select class="dropdown-btn">
                    <option ${data === 'New' ? 'selected' : ''}>New</option>
                    <option ${data === 'Contacted' ? 'selected' : ''}>Contacted</option>
                    <option ${data === 'Scheduled' ? 'selected' : ''}>Scheduled</option>
                    <option ${data === 'Follow Up' ? 'selected' : ''}>Follow Up</option>
                    <option ${data === 'Converted' ? 'selected' : ''}>Converted</option>
                </select>
            `;
        }
    },
    { 
        data: null,
        orderable: false,
        render: function() {
            return `
                <div class="action-buttons-leads">
                    <button class="action-btn phone tooltip" data-tooltip="Call"><i class="fas fa-phone"></i></button>
                    <button class="action-btn whatsapp tooltip" data-tooltip="WhatsApp"><i class="fab fa-whatsapp"></i></button>
                    <button class="action-btn status tooltip" data-tooltip="update status"><i class="fas fa-refresh"></i></button>
                    <button class="action-btn history tooltip" data-tooltip="History"><i class="fas fa-history"></i></button>
                    <button class="action-btn reassign tooltip" data-tooltip="Reassign"><i class="fas fa-user-friends"></i></button>
                </div>
            `;
        }
    }
],
        language: {
            search: "",
            searchPlaceholder: "Search leads...",
            lengthMenu: "Show _MENU_ leads",
            info: "Showing _START_ to _END_ of _TOTAL_ leads",
            infoEmpty: "No leads to show",
            paginate: { 
                first: "First", 
                last: "Last", 
                next: "Next", 
                previous: "Previous" 
            }
        },
        // Inside your DataTables initialization, add this to the initComplete function:
initComplete: function() {
    // Move the top container to the fixed controls container
    $('.top-container').detach().appendTo('#tableControlsContainer');
    
    // Style the containers
    $('.top-container').css({
        'display': 'flex',
        'align-items': 'center',
        'justify-content': 'space-between',
        'flex-wrap': 'wrap',
        'margin-top':'4px',
        'gap': '10px',
        'width': '100%',
        'margin-bottom':'6px'
    });
    
    // Style the search container
    $('.search-container').css({
        'flex': '1',
        'min-width': '200px',
        'max-width': '100%',
        'order': '1'
    });
    
    // Style the search input
    $('.dataTables_filter input').css({
        'width': '100%',
        'padding': '8px 12px',
        'border': '1px solid #dadce0',
        'border-radius': '20px',
        'font-size': '14px',
        'transition': 'border-color 0.2s ease'
    }).attr('placeholder', 'Search leads...');
    
    // Remove the default DataTables filter label
    $('.dataTables_filter label').contents().filter(function() {
        return this.nodeType === 3;
    }).remove();
    
    // Style the button container
    $('.button-container').css({
        'display': 'flex',
        'align-items': 'center',
        'gap': '10px',
        'order': '2'
    });
    
    // Style the length menu container
    $('.length-container').css({
        'order': '3'
    });
    
    // Style the buttons
    $('.dt-button').css({
        'background': '#f8f9fa',
        'border': '1px solid #dadce0',
        'border-radius': '4px',
        'padding': '8px 12px',
        'font-size': '14px',
        'color': '#3c4043',
        'cursor': 'pointer',
        'transition': 'all 0.2s ease',
        'display': 'inline-flex',
        'align-items': 'center',
        'gap': '6px',
        'margin-bottom': '0'
    });
    
    $('.dt-button:hover').css({
        'background': '#e8eaed',
        'border-color': '#bdc1c6'
    });
    
    // Style the length menu
    $('.dataTables_length label').css({
        'display': 'flex',
        'align-items': 'center',
        'gap': '8px',
        'margin': '0',
        'font-size': '14px'
    });
    
    $('.dataTables_length select').css({
        'border': '1px solid #dadce0',
        'border-radius': '4px',
        'padding': '8px 12px',
        'font-size': '14px'
    });
    
    // Initialize responsive behavior
    handleResponsiveBehavior();
}
    });

    
    // Function to create details content for expanded row
    function createDetailsContent(row) {
        const hiddenColumns = [];
        const headers = $('#leadsTable thead th');
        
        // Check each column (skip first column with expand button)
        for (let i = 1; i < headers.length; i++) {
            const header = $(headers[i]);
            const cell = row.find(`td:eq(${i})`);
            
            // If column is hidden on this screen size
            if (cell.css('display') === 'none') {
                const headerText = header.find('.filter-header-btn').text().trim();
                hiddenColumns.push({
                    header: headerText,
                    content: cell.html()
                });
            }
        }
        
        // Generate details content
        if (hiddenColumns.length > 0) {
            let detailsHTML = '<div class="details-content">';
            
            hiddenColumns.forEach(column => {
                detailsHTML += `
                    <div class="details-block">
                        <strong>${column.header}:</strong>
                        <div>${column.content}</div>
                    </div>
                `;
            });
            
            detailsHTML += '</div>';
            return detailsHTML;
        }
        
        return '';
    }

    // Function to handle responsive behavior
    function handleResponsiveBehavior() {
    const isMobile = window.innerWidth <= 900;
    
    $('#leadsTable tbody tr').each(function() {
        const $row = $(this);
        const detailsContent = createDetailsContent($row);
        const leadId = $row.find('td:eq(1) h4').text();
        let $detailsRow = $row.next('.details-row');
        
        // Always show expand button
        $row.find('.expand-row-btn').show();
        
        if (detailsContent) {
            if ($detailsRow.length) {
                // Update existing details row
                $detailsRow.find('.details-content').html(detailsContent);
            } else {
                // Create new details row
                $detailsRow = $(`
                    <tr class="details-row" data-parent-id="${leadId}">
                        <td colspan="11">
                            ${detailsContent}
                        </td>
                    </tr>
                `);
                $row.after($detailsRow);
            }
            
            // Hide details row by default
            $detailsRow.hide();
        } else {
            // No hidden columns - remove details row if it exists
            if ($detailsRow.length) {
                $detailsRow.remove();
            }
        }
    });
}
    // Expand/collapse row functionality
    // Expand/collapse row functionality
// Improved expand/collapse functionality
// Handle expand/collapse on expand button click only
// Improved expand/collapse functionality
$(document).on('click', '.expand-row-btn', function(e) {
    e.stopPropagation();
    e.preventDefault();
    
    const $btn = $(this);
    const $icon = $btn.find('i');
    const $row = $btn.closest('tr');
    const $detailsRow = $row.next('.details-row');
    
    // Toggle icon
    $icon.toggleClass('fa-plus fa-minus');
    
    // Toggle details row
    if ($detailsRow.length) {
        $detailsRow.toggle();
    }
});

// Handle row click (excluding interactive elements)
$(document).on('click', '#leadsTable tbody tr', function(e) {
    if ($(e.target).closest('.action-btn, .dropdown-btn, .filter-dropdown, .filter-header-btn, a, select, .expand-row-btn').length) {
        return;
    }
    
    const $row = $(this);
    const $btn = $row.find('.expand-row-btn');
    $btn.trigger('click');
});

// Update DataTables draw callback
table.on('draw', function() {
    $('#leadsTable tbody tr').each(function() {
        const $row = $(this);
        const $detailsRow = $row.next('.details-row');
        const $icon = $row.find('.expand-row-btn i');
        
        $icon.removeClass('fa-minus').addClass('fa-plus');
        if ($detailsRow.length && $detailsRow.is(':visible')) {
            $icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });
    
    handleResponsiveBehavior();
});



function toggleRowExpand($row) {
    const $btn = $row.find('.expand-row-btn');
    const $icon = $btn.find('i');
    const $detailsRow = $row.next('.details-row');

    if ($detailsRow.length && $detailsRow.is(':visible')) {
        $detailsRow.hide();
        $icon.removeClass('fa-minus').addClass('fa-plus');
    } else if ($detailsRow.length) {
        // Close others
        $('.details-row').hide();
        $('.expand-row-btn i').removeClass('fa-minus').addClass('fa-plus');

        $detailsRow.show();
        $icon.removeClass('fa-plus').addClass('fa-minus');
    } else {
        // No details row exists, just toggle the icon
        if ($icon.hasClass('fa-plus')) {
            $icon.removeClass('fa-plus').addClass('fa-minus');
        } else {
            $icon.removeClass('fa-minus').addClass('fa-plus');
        }
    }
}





// Initialize button states after table is drawn
table.on('draw', function() {
    $('#leadsTable tbody tr').each(function() {
        const $row = $(this);
        const $detailsRow = $row.next('.details-row');
        const $icon = $row.find('.expand-row-btn i');

        if ($detailsRow.length && $detailsRow.is(':visible')) {
            $icon.removeClass('fa-plus').addClass('fa-minus');
        } else {
            $icon.removeClass('fa-minus').addClass('fa-plus');
        }
    });

    handleResponsiveBehavior();
});

    let resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            handleResponsiveBehavior();
        }, 250);
    });

    // Close filter panel when clicking outside
    $(document).click(function(e) {
        if (!$(e.target).closest('.filter-header').length) {
            $('.filter-header').removeClass('active');
        }
    });

    // Toggle filter dropdowns when clicking header buttons
    $(document).on('click', '.filter-header-btn', function(e) {
        e.preventDefault();
        e.stopPropagation();
        const header = $(this).closest('.filter-header');
        
        // Close all other dropdowns
        $('.filter-header').not(header).removeClass('active');
        
        // Toggle current dropdown
        header.toggleClass('active');
        
        // Position the dropdown below the header
        const dropdown = header.find('.filter-dropdown');
        if (header.hasClass('active')) {
            dropdown.css({
                'top': header.outerHeight() + 'px',
                'left': '0'
            });
        }
    });

    // Sort functionality - only when clicking sort buttons in dropdown
    $(document).on('click', '.sort-btn', function(e) {
        e.stopPropagation();
        const sortDirection = $(this).data('sort');
        const columnHeader = $(this).closest('.filter-header');
        const columnIndex = columnHeader.index();
        
        $(this).siblings('.sort-btn').removeClass('active');
        $(this).addClass('active');
        
        // Enable sorting temporarily for this column
        table.column(columnIndex).order(sortDirection).draw();
        
        // Close the dropdown
        columnHeader.removeClass('active');
    });

    // Filter functionality for checkboxes
    $(document).on('change', '.filter-options input[type="checkbox"]', function() {
        const columnHeader = $(this).closest('.filter-header');
        const columnIndex = columnHeader.index();
        const checkedValues = [];
        
        $(this).closest('.filter-options').find('input:checked').each(function() {
            if ($(this).parent().text().trim() !== "All Leads" && 
                $(this).parent().text().trim() !== "All Statuses" &&
                $(this).parent().text().trim() !== "All Sources") {
                checkedValues.push($(this).parent().text().trim());
            }
        });
        
        if (checkedValues.length === 0 || 
            $(this).closest('.filter-options').find('input:checked').filter(function() {
                return $(this).parent().text().trim() === "All Leads" || 
                       $(this).parent().text().trim() === "All Statuses" ||
                       $(this).parent().text().trim() === "All Sources";
            }).length > 0) {
            table.column(columnIndex).search('').draw();
        } else {
            const searchPattern = checkedValues.join('|');
            table.column(columnIndex).search(searchPattern, true, false).draw();
        }
    });
    // Mobile bottom nav functionality
$(document).on('click', '.filter-btn-mobile', function() {
    // Trigger the filter button click
    $('.dt-button.filter-btn').click();
});

$(document).on('click', '.add-btn-mobile', function() {
    // Trigger the add new lead action
    $('.action-button').first().click();
});

$(document).on('click', '.columns-btn-mobile', function() {
    // Trigger the columns visibility button
    $('.dt-button.columns-btn').click();
});

// Adjust DataTables layout when columns button is shown
$(document).on('click', '.columns-btn-mobile, .dt-button.columns-btn', function() {
    if ($('.dt-button-collection').length) {
        // Position the columns dropdown above the bottom nav
        $('.dt-button-collection').css({
            'bottom': '60px',
            'top': 'auto'
        });
    }
});
    // Search functionality
    $(document).on('keyup', '.filter-search input', function() {
        const columnHeader = $(this).closest('.filter-header');
        const columnIndex = columnHeader.index();
        const searchValue = $(this).val();
        table.column(columnIndex).search(searchValue).draw();
    });

    // Hover effects
    $(document).on('mouseenter', '.enhanced-table tbody tr', function() { 
        $(this).addClass('row-hover'); 
    }).on('mouseleave', '.enhanced-table tbody tr', function() { 
        $(this).removeClass('row-hover'); 
    });
});


</script>

<?php include 'htmlclose.php'; ?>