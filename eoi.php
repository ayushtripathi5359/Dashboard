<?php
$pageTitle = "EOI";
include 'htmlopen.php';
include 'header.php';
?>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

<div class="container">
    <!-- EOI Table Section -->
    <div class="container">
        <!-- Filter Buttons -->
        <div class="filter-row">
            <button class="filter-btn small-btn"><i class="fas fa-check-circle"></i> New <span class="count">15</span></button>
            <button class="filter-btn small-btn"><i class="fas fa-star"></i> Verified <span class="count">36</span></button>
            <button class="filter-btn small-btn"><i class="fas fa-clock"></i> Follow Up <span class="count">8</span></button>
            <button class="filter-btn small-btn"><i class="fas fa-check"></i> Converted <span class="count">12</span></button>
        </div>

        <!-- EOI Table -->
        <div class="dashboard-card-eoi">
            <div class="card-header-eoi">
            </div>
            
            <!-- Fixed Controls Container -->
            <div class="table-controls-fixed">
                <div id="eoiTableControlsContainer"></div>
            </div>
            
            <!-- Scrollable Table Container -->
            <div class="table-container">
                <table class="enhanced-table" id="eoiTable">
                    <thead>
                        <tr>
                            <th class="checkbox-cell">
                                <input type="checkbox" id="selectAllEoi">
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">ID <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search IDs..." class="filter-search-input" data-column="1">
                                    </div>
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="1" value=""> All IDs</label>
                                        <label><input type="checkbox" class="filter-option" data-column="1" value="EOI001"> EOI001</label>
                                        <label><input type="checkbox" class="filter-option" data-column="1" value="EOI002"> EOI002</label>
                                        <label><input type="checkbox" class="filter-option" data-column="1" value="EOI003"> EOI003</label>
                                    </div>
                                </div>
                            </th>
                            <th class="expand-btn-cell"></th>
                            <th class="filter-header">
                                <button class="filter-header-btn">BOOKING DATE <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search dates..." class="filter-search-input" data-column="3">
                                    </div>
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="3" value=""> All Dates</label>
                                        <label><input type="checkbox" class="filter-option" data-column="3" value="2023-05-15"> May 15, 2023</label>
                                        <label><input type="checkbox" class="filter-option" data-column="3" value="2023-06-20"> Jun 20, 2023</label>
                                        <label><input type="checkbox" class="filter-option" data-column="3" value="2023-07-10"> Jul 10, 2023</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">BOOKING MONTH <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="4" value=""> All Months</label>
                                        <label><input type="checkbox" class="filter-option" data-column="4" value="January"> January</label>
                                        <label><input type="checkbox" class="filter-option" data-column="4" value="February"> February</label>
                                        <label><input type="checkbox" class="filter-option" data-column="4" value="March"> March</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">BUILDER NAME <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search builders..." class="filter-search-input" data-column="5">
                                    </div>
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="5" value=""> All Builders</label>
                                        <label><input type="checkbox" class="filter-option" data-column="5" value="Prestige Group"> Prestige Group</label>
                                        <label><input type="checkbox" class="filter-option" data-column="5" value="Sobha Limited"> Sobha Limited</label>
                                        <label><input type="checkbox" class="filter-option" data-column="5" value="Brigade Group"> Brigade Group</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">PROJECT NAME <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search projects..." class="filter-search-input" data-column="6">
                                    </div>
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="6" value=""> All Projects</label>
                                        <label><input type="checkbox" class="filter-option" data-column="6" value="Prestige Raintree Park"> Prestige Raintree Park</label>
                                        <label><input type="checkbox" class="filter-option" data-column="6" value="Sobha Dream Acres"> Sobha Dream Acres</label>
                                        <label><input type="checkbox" class="filter-option" data-column="6" value="Brigade Metropolis"> Brigade Metropolis</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">CUSTOMER NAME <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search customers..." class="filter-search-input" data-column="7">
                                    </div>
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="7" value=""> All Customers</label>
                                        <label><input type="checkbox" class="filter-option" data-column="7" value="Rahul Sharma"> Rahul Sharma</label>
                                        <label><input type="checkbox" class="filter-option" data-column="7" value="Priya Patel"> Priya Patel</label>
                                        <label><input type="checkbox" class="filter-option" data-column="7" value="Amit Singh"> Amit Singh</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">CONTACT NUMBER <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search contacts..." class="filter-search-input" data-column="8">
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">EMAIL <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search emails..." class="filter-search-input" data-column="9">
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">PROJECT TYPE <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="10" value=""> All Types</label>
                                        <label><input type="checkbox" class="filter-option" data-column="10" value="Residential"> Residential</label>
                                        <label><input type="checkbox" class="filter-option" data-column="10" value="Commercial"> Commercial</label>
                                        <label><input type="checkbox" class="filter-option" data-column="10" value="Plotted"> Plotted</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header mobile-hide">
    <button class="filter-header-btn">STATUS <i class="fas fa-caret-down"></i></button>
</th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">ACTIONS </i></button>
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
    
    <!-- Floating Action Button -->
    <div class="floating-add-btn">
        <div class="selection-actions" style="display: none;">
            <button class="action-button assign-users-btn"><i class="fas fa-user-friends"></i> Assign</button>
            <button class="action-button delete-selected-btn"><i class="fas fa-trash"></i></button>
        </div>
        <button class="action-button"><i class="fas fa-plus"></i></button>
    </div>
    
    <!-- Mobile Bottom Navigation -->
    <div class="mobile-bottom-nav">
        <button class="mobile-nav-btn filter-btn-mobile">
            <i class="fas fa-filter"></i>
            <span>Filter</span>
        </button>
        <button class="mobile-nav-btn assign-btn-mobile">
            <i class="fas fa-user-friends"></i>
            <div class="assign">
                <span>Assign</span>
                <span class="selection-count"></span>
            </div>
        </button>
        <button class="mobile-nav-btn add-btn-mobile">
            <i class="fas fa-plus"></i>
        </button>
        <button class="mobile-nav-btn delete-btn-mobile">
            <i class="fas fa-trash"></i>
            <div class="assign">
                <span>Delete</span>
                <span class="selection-count"></span>
            </div>
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  var currentExpandedRow = null;
$(document).ready(function() {
    // Initialize DataTable for EOI
    var eoiTable = $('#eoiTable').DataTable({
        data: [
            {
                "id": "EOI001",
                "bookingDate": "2023-05-15",
                "bookingMonth": "May",
                "builderName": "Prestige Group",
                "projectName": "Prestige Raintree Park",
                "customerName": "Rahul Sharma",
                "contactNumber": "+91 9876543210",
                "email": "rahul.sharma@example.com",
                "projectType": "Residential",
                "status": "New"
            },
            {
                "id": "EOI002",
                "bookingDate": "2023-06-20",
                "bookingMonth": "June",
                "builderName": "Sobha Limited",
                "projectName": "Sobha Dream Acres",
                "customerName": "Priya Patel",
                "contactNumber": "+91 8765432109",
                "email": "priya.patel@example.com",
                "projectType": "Commercial",
                "status": "Verified"
            },
            {
                "id": "EOI003",
                "bookingDate": "2023-07-10",
                "bookingMonth": "July",
                "builderName": "Brigade Group",
                "projectName": "Brigade Metropolis",
                "customerName": "Amit Singh",
                "contactNumber": "+91 7654321098",
                "email": "amit.singh@example.com",
                "projectType": "Plotted",
                "status": "Follow Up"
            },
            {
                "id": "EOI004",
                "bookingDate": "2023-08-05",
                "bookingMonth": "August",
                "builderName": "Prestige Group",
                "projectName": "Prestige Shantiniketan",
                "customerName": "Neha Gupta",
                "contactNumber": "+91 6543210987",
                "email": "neha.gupta@example.com",
                "projectType": "Residential",
                "status": "Converted"
            },
            {
                "id": "EOI005",
                "bookingDate": "2023-09-12",
                "bookingMonth": "September",
                "builderName": "Sobha Limited",
                "projectName": "Sobha Silicon Oasis",
                "customerName": "Vikram Joshi",
                "contactNumber": "+91 9432109876",
                "email": "vikram.joshi@example.com",
                "projectType": "Commercial",
                "status": "Verified"
            }
        ],
        responsive: true,
        ordering: false,
        // FIX 1: Simplified DOM structure
        dom: 'Bfrtip',
        buttons: [
            {
                text: '<i class="fas fa-filter"></i> Filter',
                className: 'dt-button filter-btn'
            },
            {
                extend: 'colvis',
                text: '<i class="fas fa-columns"></i> Columns',
                className: 'dt-button columns-btn'
            }
        ],
        lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        pageLength: 10,
        columns: [
            { 
                data: null,
                className: 'checkbox-cell',
                orderable: false,
                render: function() {
                    return '<input type="checkbox" class="row-checkbox">';
                }
            },
            { 
                data: "id",
                render: function(data) {
                    return `<div class="eoi-id-section">${data}</div>`;
                }
            },
            { 
                data: null,
                className: 'expand-btn-cell',
                orderable: false,
                render: function() {
                    return '<button class="expand-row-btn" aria-label="Expand row"><i class="fas fa-chevron-down"></i></button>';
                }
            },
            { 
                data: "bookingDate",
                render: function(data) {
                    return `<div class="date-info">${formatDate(data)}</div>`;
                }
            },
            { 
                data: "bookingMonth",
                render: function(data) {
                    return `<div class="month-info">${data}</div>`;
                }
            },
            { 
                data: "builderName",
                className: 'mobile-hide',
                render: function(data) {
                    return `<div class="builder-info">${data}</div>`;
                }
            },
            { 
                data: "projectName",
                className: 'mobile-hide',
                render: function(data) {
                    return `<div class="project-info">${data}</div>`;
                }
            },
            { 
                data: "customerName",
                className: 'mobile-hide',
                render: function(data, type, row) {
                    return `
                        <div class="customer-profile">
                            <div class="customer-name">${data}</div>
                            <div class="mobile-project-info">
                                <span class="project-name-mobile">${row.projectName}</span>
                            </div>
                        </div>
                    `;
                }
            },
            { 
                data: "contactNumber",
                className: 'mobile-hide',
                render: function(data) {
                    const encryptedPhone = encryptPhone(data);
                    return `<div class="contact-info encrypted" data-real-phone="${data}">${encryptedPhone}</div>`;
                }
            },
            { 
                data: "email",
                className: 'mobile-hide',
                render: function(data) {
                    return `<div class="email-info">${data}</div>`;
                }
            },
            { 
                data: "projectType",
                className: 'mobile-hide',
                render: function(data) {
                    return `<div class="type-info"><span class="type-badge ${data.toLowerCase()}">${data}</span></div>`;
                }
            },
            {
                data: "status",
                className: 'mobile-hide',
                render: function(data) {
                    return `<span class="status-badge ${data ? data.toLowerCase().replace(' ', '-') : ''}">${data || ''}</span>`;
                }
            },
            { 
                data: null,
                className: 'mobile-hide',
                orderable: false,
                render: function(data, type, row) {
                    return `
                        <div class="action-buttons-eoi">
                            <button class="action-btn call tooltip" data-tooltip="Call"><i class="fas fa-phone"></i></button>
                            <button class="action-btn email tooltip" data-tooltip="Email"><i class="fas fa-envelope"></i></button>
                            <button class="action-btn status tooltip" data-tooltip="Update Status"><i class="fas fa-sync-alt"></i></button>
                            <button class="action-btn view tooltip" data-tooltip="View Details"><i class="fas fa-eye"></i></button>
                        </div>
                    `;
                }
            }
        ],
        language: {
            search: "",
            searchPlaceholder: "Search EOI...",
            lengthMenu: "Show _MENU_ EOI",
            info: "Showing _START_ to _END_ of _TOTAL_ EOI",
            infoEmpty: "No EOI to show",
            paginate: { 
                first: "First", 
                last: "Last", 
                next: "Next", 
                previous: "Previous" 
            }
        },
        // FIX 2: Ensure proper row creation
        createdRow: function(row, data, dataIndex) {
            // Add status class to row based on data
            if (data.status) {
                $(row).addClass(data.status.toLowerCase().replace(' ', '-') + '-status');
            }
        },
        // FIX 3: Proper initialization callback
        initComplete: function() {
            // FIX 4: Only move controls if the container exists
            if ($('#eoiTableControlsContainer').length) {
                $('.dt-buttons').detach().appendTo('#eoiTableControlsContainer');
            }
            
            // Initialize other functionality
            initFilterDropdowns();
            
            // Handle select all checkbox
            $('#selectAllEoi').off('change').on('change', function() {
                $('.row-checkbox').prop('checked', $(this).prop('checked'));
                updateSelectionActions();
            });
            
            // Handle row checkboxes
            $(document).off('change', '.row-checkbox').on('change', '.row-checkbox', function() {
                const totalCheckboxes = $('.row-checkbox').length;
                const checkedCheckboxes = $('.row-checkbox:checked').length;
                $('#selectAllEoi').prop('checked', totalCheckboxes === checkedCheckboxes);
                updateSelectionActions();
            });
            
            // Handle responsive behavior
            handleResponsiveBehavior();
            
            // Initialize mobile buttons
            initMobileButtons();
            
            // FIX 5: Force table redraw to ensure visibility
            setTimeout(function() {
                eoiTable.columns.adjust().draw();
            }, 100);
        }
    });

    $(window).on('resize', function() {
        if (typeof eoiTable !== 'undefined') {
            eoiTable.columns.adjust();
            handleResponsiveBehavior();
        }
    });

    
    // Function to format date
    function formatDate(dateString) {
        const options = { year: 'numeric', month: 'short', day: 'numeric' };
        return new Date(dateString).toLocaleDateString('en-US', options);
    }
    
    function encryptPhone(phone) {
        if (!phone) return '';
        const digitsOnly = phone.replace(/\D/g, '');
        if (digitsOnly.length === 10) {
            return '•••••' + digitsOnly.slice(-5);
        }
        if (digitsOnly.length > 10) {
            return '•••-' + digitsOnly.slice(-4);
        }
        return '••••••••';
    }
    
    function updateSelectionActions() {
        const selectedCount = $('.row-checkbox:checked').length;
        const $mobileNav = $('.mobile-bottom-nav');
        
        if (selectedCount > 0) {
            $('.selection-actions').show();
            $mobileNav.addClass('has-selection');
            $('.selection-count').text(selectedCount).css('display', 'flex');
        } else {
            $('.selection-actions').hide();
            $mobileNav.removeClass('has-selection');
            $('.selection-count').css('display', 'none');
        }
    }
    
    function initFilterDropdowns() {
        // Your existing filter dropdown code...
        $(document).on('click', '.filter-header-btn', function(e) {
            e.stopPropagation();
            e.preventDefault();
            const $header = $(this).closest('.filter-header');
            const $dropdown = $header.find('.filter-dropdown');
            $('.filter-dropdown').not($dropdown).hide();
            $dropdown.toggle();
        });
        
        $(document).on('click', function() {
            $('.filter-dropdown').hide();
        });
        
        $(document).on('click', '.filter-dropdown', function(e) {
            e.stopPropagation();
        });
    }
    
    function handleResponsiveBehavior() {
        // Your existing responsive behavior code...
        const isMobile = window.innerWidth <= 900;
        
        if (isMobile) {
            $('.mobile-hide').hide();
        } else {
            $('.mobile-hide').show();
        }
    }
    
    function createDetailsContent(row) {
        // Your existing details content code...
        return '';
    }
    
    function initMobileButtons() {
        // Your existing mobile button initialization code...
    }
    
    // Your existing event handlers...
    $(document).on('click', '.expand-row-btn', function(e) {
        e.stopPropagation();
        e.preventDefault();
        
        const $btn = $(this);
        const $icon = $btn.find('i');
        const $row = $btn.closest('tr');
        const $detailsRow = $row.next('.details-row');
        
        if (currentExpandedRow && currentExpandedRow !== $row[0]) {
            const $prevRow = $(currentExpandedRow);
            const $prevDetails = $prevRow.next('.details-row');
            const $prevIcon = $prevRow.find('.expand-row-btn i');
            $prevDetails.hide();
            $prevIcon.removeClass('rotated');
        }
        
        if ($detailsRow.is(':visible')) {
            $detailsRow.hide();
            $icon.removeClass('rotated');
        } else {
            $detailsRow.show();
            $icon.addClass('rotated');
        }
        
        currentExpandedRow = $detailsRow.is(':visible') ? $row[0] : null;
    });
    
    $(document).on('click', '#eoiTable tbody tr', function(e) {
        if ($(e.target).closest('.action-btn, .filter-dropdown, .filter-header-btn, a, input[type="checkbox"], .expand-row-btn').length) {
            return;
        }
        
        if ($(this).hasClass('details-row')) {
            return;
        }
        
        const $currentRow = $(this);
        const $currentPhoneInfo = $currentRow.find('.contact-info.encrypted');
        
        if ($currentPhoneInfo.length) {
            if ($currentPhoneInfo.hasClass('encrypted')) {
                const realPhone = $currentPhoneInfo.data('real-phone');
                $currentPhoneInfo.text(realPhone).removeClass('encrypted');
            } else {
                const realPhone = $currentPhoneInfo.data('real-phone');
                const encryptedPhone = encryptPhone(realPhone);
                $currentPhoneInfo.text(encryptedPhone).addClass('encrypted');
            }
        }
    });
});

var currentExpandedRow = null;

    </script>