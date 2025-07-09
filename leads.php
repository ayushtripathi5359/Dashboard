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
            <button class="filter-btn small-btn"><i class="fas fa-check-circle"></i> Active <span class="count">36</span></button>
            <button class="filter-btn small-btn"><i class="fas fa-star"></i> New <span class="count">0</span></button>
            <button class="filter-btn small-btn"><i class="fas fa-clock"></i> Pending <span class="count">26</span></button>
            <button class="filter-btn small-btn"><i class="fas fa-arrow-up"></i> Follow Up <span class="count">3</span></button>
            <button class="filter-btn small-btn"><i class="fas fa-user-clock"></i> Untouched <span class="count">5</span></button>
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
            <div class="table-container">
                <table class="enhanced-table" id="leadsTable">
                    <thead>
                        <tr>
                            <th class="checkbox-cell">
                                <input type="checkbox" id="selectAll">
                            </th>
                            
                            <th class="filter-header">
                                <button class="filter-header-btn">LEAD <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search leads..." class="filter-search-input" data-column="1">
                                    </div>
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="1" value=""> All Leads</label>
                                        <label><input type="checkbox" class="filter-option" data-column="1" value="Michael Brown"> Michael Brown</label>
                                        <label><input type="checkbox" class="filter-option" data-column="1" value="Hem Chandra Tripathi"> Hem Chandra Tripathi</label>
                                        <label><input type="checkbox" class="filter-option" data-column="1" value="Abhay Mishra"> Abhay Mishra</label>
                                    </div>
                                    
                                </div>
                            </th>
                            <th class="filter-header">
                                <button class="filter-header-btn">ID <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search IDs..." class="filter-search-input" data-column="2">
                                    </div>
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="2" value=""> All IDs</label>
                                        <label><input type="checkbox" class="filter-option" data-column="2" value="LD003"> LD003</label>
                                        <label><input type="checkbox" class="filter-option" data-column="2" value="LD004"> LD004</label>
                                        <label><input type="checkbox" class="filter-option" data-column="2" value="LD005"> LD005</label>
                                        <label><input type="checkbox" class="filter-option" data-column="2" value="LD006"> LD006</label>
                                        <label><input type="checkbox" class="filter-option" data-column="2" value="LD007"> LD007</label>
                                        <label><input type="checkbox" class="filter-option" data-column="2" value="LD008"> LD008</label>
                                    </div>
                                   
                                </div>
                            </th>
                            <th class="expand-btn-cell"></th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">EMAIL <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search contacts..." class="filter-search-input" data-column="4">
                                    </div>
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="4" value=""> All Emails</label>
                                        <label><input type="checkbox" class="filter-option" data-column="4" value="michael.b@example.com"> michael.b@example.com</label>
                                        <label><input type="checkbox" class="filter-option" data-column="4" value="ayush@example.com"> ayush@example.com</label>
                                        <label><input type="checkbox" class="filter-option" data-column="4" value="abhay@example.com"> abhay@example.com</label>
                                        <label><input type="checkbox" class="filter-option" data-column="4" value="sarah.w@example.com"> sarah.w@example.com</label>
                                        <label><input type="checkbox" class="filter-option" data-column="4" value="david.j@example.com"> david.j@example.com</label>
                                        <label><input type="checkbox" class="filter-option" data-column="4" value="emily.d@example.com"> emily.d@example.com</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">ASSIGNED PROJECT <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="5" value=""> All Projects</label>
                                        <label><input type="checkbox" class="filter-option" data-column="5" value="Project: Prestige Raintree park"> Prestige Raintree park</label>
                                        <label><input type="checkbox" class="filter-option" data-column="5" value="Project A"> Project A</label>
                                        <label><input type="checkbox" class="filter-option" data-column="5" value="Project B"> Project B</label>
                                        <label><input type="checkbox" class="filter-option" data-column="5" value="Project C"> Project C</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">LOCATION <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search locations..." class="filter-search-input" data-column="6">
                                    </div>
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="6" value=""> All Locations</label>
                                        <label><input type="checkbox" class="filter-option" data-column="6" value="New York"> New York</label>
                                        <label><input type="checkbox" class="filter-option" data-column="6" value="Chicago"> Chicago</label>
                                        <label><input type="checkbox" class="filter-option" data-column="6" value="Los Angeles"> Los Angeles</label>
                                        <label><input type="checkbox" class="filter-option" data-column="6" value="Miami"> Miami</label>
                                        <label><input type="checkbox" class="filter-option" data-column="6" value="Seattle"> Seattle</label>
                                        <label><input type="checkbox" class="filter-option" data-column="6" value="Boston"> Boston</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">LEAD SOURCE <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="7" value=""> All Sources</label>
                                        <label><input type="checkbox" class="filter-option" data-column="7" value="Website"> Website</label>
                                        <label><input type="checkbox" class="filter-option" data-column="7" value="Event"> Event</label>
                                        <label><input type="checkbox" class="filter-option" data-column="7" value="Referral"> Referral</label>
                                        <label><input type="checkbox" class="filter-option" data-column="7" value="Google"> Google</label>
                                    </div>
                                </div>
                            </th>
                            <th class="filter-header mobile-hide">
                                <button class="filter-header-btn">ASSIGNED LEAD <i class="fas fa-caret-down"></i></button>
                                <div class="filter-dropdown">
                                    <div class="filter-search">
                                        <input type="text" placeholder="Search assigned leads..." class="filter-search-input" data-column="8">
                                    </div>
                                    <div class="filter-options">
                                        <label><input type="checkbox" checked class="filter-option" data-column="8" value=""> All Leads</label>
                                        <label><input type="checkbox" class="filter-option" data-column="8" value="John Smith"> John Smith</label>
                                        <label><input type="checkbox" class="filter-option" data-column="8" value="Sarah Johnson"> Sarah Johnson</label>
                                        <label><input type="checkbox" class="filter-option" data-column="8" value="Mike Davis"> Mike Davis</label>
                                    </div>
                                </div>
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
    <div class="modal-overlay" id="addLeadModal" style="display: none;">
    <div class="modal-container">
        <div class="modal-header">
            <h3>Add New Lead</h3>
            <button class="modal-close-btn" id="closeAddLeadModal">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <form id="addLeadForm">
                <div class="form-group">
                    <label for="leadName">Name <span class="required">*</span></label>
                    <input type="text" id="leadName" name="leadName" required placeholder="Enter full name">
                    <div class="error-message"></div>
                </div>
                
                <div class="form-group">
                    <label for="leadPhone">Phone Number <span class="required">*</span></label>
                    <div class="phone-input-container">
                        <div class="country-code">+91</div>
                        <input type="tel" id="leadPhone" name="leadPhone" required placeholder="Enter phone number" maxlength="10" pattern="[0-9]{10}">
                    </div>
                    <div class="error-message"></div>
                </div>
                
                <div class="form-group">
                    <label for="leadEmail">Email</label>
                    <input type="email" id="leadEmail" name="leadEmail" placeholder="Enter email address">
                    <div class="error-message"></div>
                </div>
                
                <div class="form-group">
                  <label for="leadProject">Project <span class="required">*</span></label>
                  <input type="text" id="leadProject" name="leadProject" required placeholder="Enter project name">
                  <div class="error-message"></div>
                </div>
                
                <div class="form-group">
                    <label for="leadSource">Lead Source <span class="required">*</span></label>
                    <select id="leadSource" name="leadSource" required>
                        <option value="">Select Source</option>
                        <option value="Website">Website</option>
                        <option value="Google">Google Ads</option>
                        <option value="Referral">Referral</option>
                        <option value="Event">Event</option>
                        <option value="Walk-in">Walk-in</option>
                        <option value="Social Media">Social Media</option>
                    </select>
                    <div class="error-message"></div>
                </div>
                
                
                <div class="form-actions">
                    <button type="button" class="cancel-btn" id="cancelAddLead">Cancel</button>
                    <button type="submit" class="submit-btn">Add Lead</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
<div class="modal-overlay" id="filterModal" style="display: none;">
    <div class="modal-container">
        <div class="modal-header">
            <h3>Filter Leads</h3>
            <button class="modal-close-btn" id="closeFilterModal">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <form id="filterForm">
                <!-- Name Filter -->
                <div class="form-group">
                    <label for="filterName">Name</label>
                    <input type="text" id="filterName" class="filter-text-input" placeholder="Enter name">
                </div>
                <!-- ID Filter -->
                <div class="form-group">
                    <label for="filterId">Lead ID</label>
                    <input type="text" id="filterId" class="filter-text-input" placeholder="Enter lead ID">
                </div>
                <!-- Email Filter -->
                <div class="form-group">
                    <label for="filterEmail">Email</label>
                    <input type="text" id="filterEmail" class="filter-text-input" placeholder="Enter email">
                </div>
                <!-- Status Filter -->
                <div class="form-group">
                    <label>Status</label>
                    <select id="statusFilter" class="select-input" multiple>
                        <option value="Active">Active</option>
                        <option value="New">New</option>
                        <option value="Pending">Pending</option>
                        <option value="Follow Up">Follow Up</option>
                        <option value="Converted">Converted</option>
                        <option value="Dropped">Dropped</option>
                    </select>
                </div>
                <!-- Lead Source Filter -->
                <div class="form-group">
                    <label>Lead Source</label>
                    <select id="sourceFilter" class="select-input" multiple>
                        <option value="Website">Website</option>
                        <option value="Google">Google</option>
                        <option value="Referral">Referral</option>
                        <option value="Social Media">Social Media</option>
                        <option value="Event">Event</option>
                        <option value="Walk-in">Walk-in</option>
                    </select>
                </div>
                <!-- Date Range Filter -->
                <div class="form-group">
                    <label>Date Range</label>
                    <div class="date-range-fields">
                        <div class="date-field">
                            <label for="startDate">From</label>
                            <input type="date" id="startDate" class="date-input">
                        </div>
                        <div class="date-field">
                            <label for="endDate">To</label>
                            <input type="date" id="endDate" class="date-input">
                        </div>
                    </div>
                </div>
                <!-- Assigned To Filter -->
                <div class="form-group">
                    <label>Assigned Lead</label>
                    <input type="text" id="filterAssignedLead" class="filter-text-input" placeholder="Enter assigned lead">
                </div>
                <!-- Project Filter -->
                <div class="form-group">
                    <label>Project</label>
                    <select id="projectFilter" class="select-input" multiple>
                        <option value="Prestige Raintree Park">Prestige Raintree Park</option>
                        <option value="Project A">Project A</option>
                        <option value="Project B">Project B</option>
                        <option value="Project C">Project C</option>
                    </select>
                </div>
                <!-- Location Filter -->
                <div class="form-group">
                    <label>Location</label>
                    <select id="locationFilter" class="select-input" multiple>
                        <option value="New York">New York</option>
                        <option value="Chicago">Chicago</option>
                        <option value="Los Angeles">Los Angeles</option>
                        <option value="Miami">Miami</option>
                        <option value="Seattle">Seattle</option>
                        <option value="Boston">Boston</option>
                    </select>
                </div>
                <!-- Form Actions -->
                
            </form>
            <div class="form-actions">
                    <button type="button" class="cancel-btn" id="resetFilters">Reset</button>
                    <button type="submit" class="submit-btn">Apply Filters</button>
                </div>
        </div>
    </div>
</div>
<!-- Add this modal HTML just before the closing </div> of the container -->
<div class="modal-overlay" id="reassignModal" style="display: none;">
    <div class="modal-container">
        <div class="modal-header">
            <h3>Reassign Lead</h3>
            <button class="modal-close-btn" id="closeReassignModal">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <form id="reassignForm">
                <div class="form-group">
                    <label for="reassignLeadName">Lead Name</label>
                    <input type="text" id="reassignLeadName" class="filter-text-input" readonly>
                </div>
                
                <div class="form-group">
                    <label for="reassignLeadId">Lead ID</label>
                    <input type="text" id="reassignLeadId" class="filter-text-input" readonly>
                </div>
                
                <div class="form-group">
                    <label for="reassignTo">Assign To <span class="required">*</span></label>
                    <select id="reassignTo" class="select-input" required>
                        <option value="">Select Team Member</option>
                        <option value="John Smith">John Smith</option>
                        <option value="Sarah Johnson">Sarah Johnson</option>
                        <option value="Mike Davis">Mike Davis</option>
                        <option value="Emily Wilson">Emily Wilson</option>
                        <option value="David Brown">David Brown</option>
                    </select>
                </div>
                <div class="form-actions">
                    <button type="button" class="cancel-btn" id="cancelReassign">Cancel</button>
                    <button type="submit" class="submit-btn">Reassign Lead</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add this modal just before the closing </div> of the container -->
<div class="modal-overlay" id="deleteModal" style="display: none;">
    <div class="modal-container">
        <div class="modal-header">
            <h3>Delete Leads</h3>
            <button class="modal-close-btn" id="closeDeleteModal">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <form id="deleteForm">
                <div class="form-group">
                    <p id="deleteMessage">Are you sure you want to delete the selected leads? This action cannot be undone.</p>
                    <div id="selectedLeadsList" style="max-height: 200px; overflow-y: auto; margin-top: 15px; display: none;">
                        <h4>Selected Leads:</h4>
                        <ul id="leadsToDelete" style="list-style-type: none; padding-left: 0;"></ul>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="button" class="cancel-btn" id="cancelDelete">Cancel</button>
                    <button type="submit" class="submit-btn delete-btn">Delete Leads</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add this modal HTML just before the closing </div> tag of the container -->
<div class="modal-overlay" id="assignModal" style="display: none;">
    <div class="modal-container">
        <div class="modal-header">
            <h3>Assign Leads</h3>
            <button class="modal-close-btn" id="closeAssignModal">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <div class="selected-leads-info">
                <p><i class="fas fa-users"></i> <span id="selectedLeadsCount">0</span> leads selected</p>
                <div class="lead-ids-container" id="selectedLeadsList"></div>
            </div>
            
            <form id="assignForm">
                <div class="form-group">
                    <label for="assignTo">Assign To <span class="required">*</span></label>
                    <select id="assignTo" name="assignTo" required class="select-input">
                        <option value="">Select Team Member</option>
                        <option value="John Smith">John Smith</option>
                        <option value="Sarah Johnson">Sarah Johnson</option>
                        <option value="Mike Davis">Mike Davis</option>
                        <option value="Yourself">Yourself</option>
                    </select>
                    <div class="error-message"></div>
                </div>
                
                <div class="form-group">
                    <label for="assignNote">Note (Optional)</label>
                    <textarea id="assignNote" name="assignNote" placeholder="Add a note about this assignment..." rows="3"></textarea>
                </div>
                
                <div class="form-actions">
                    <button type="button" class="cancel-btn" id="cancelAssign">Cancel</button>
                    <button type="submit" class="submit-btn">Assign Leads</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
$(document).ready(function() {
    // Track currently expanded row and phone row
    var currentExpandedRow = null;
    var currentPhoneRow = null;
    var table;
    var currentActiveFilter = 'my'; // Track the currently active filter

    // Function to encrypt phone number (simple masking)
    function encryptPhone(phone) {
        if (!phone) return '';
        
        // Remove all non-digit characters
        const digitsOnly = phone.replace(/\D/g, '');
        
        // Handle very short numbers (show nothing)
        if (digitsOnly.length <= 2) return '***';
        
        // For Indian numbers (typically 10 digits) show last 4 digits
        if (digitsOnly.length === 10) {
            return '•••••' + digitsOnly.slice(-5);
        }
        
        // For international numbers with country code, show last 4 digits
        if (digitsOnly.length > 10) {
            return '•••-' + digitsOnly.slice(-4);
        }
        
        // Default case - show last 4 digits
        const lastFour = digitsOnly.slice(-4);
        return '•••••' + lastFour;
    }

    // Function to get last touch status
    function getLastTouchStatus(dateString) {
        if (!dateString || dateString.includes("Untouched")) {
            return {
                text: "Untouched",
                class: "untouched"
            };
        }
        
        const today = new Date();
        const date = new Date(dateString);
        const diffTime = Math.abs(today - date);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        
        if (diffDays === 0) {
            return {
                text: "Touched today",
                class: "recent"
            };
        } else if (diffDays === 1) {
            return {
                text: "Touched yesterday",
                class: "recent"
            };
        } else if (diffDays <= 7) {
            return {
                text: "Touched this week",
                class: "this-week"
            };
        } else {
            return {
                text: "Touched over a week ago",
                class: "over-week"
            };
        }
    }

    // Function to update selection actions visibility
    // Function to update selection actions visibility
function updateSelectionActions() {
    const $selectedRows = $('.row-checkbox:checked');
    const selectedCount = $selectedRows.length;
    const $mobileNav = $('.mobile-bottom-nav');
    
    if (selectedCount > 0) {
        $('.selection-actions').show();
        $mobileNav.addClass('has-selection');
        
        // Update selection count
        $('.assign-btn-mobile .selection-count, .delete-btn-mobile .selection-count')
            .text(selectedCount)
            .css('display', 'flex');
            
        $('.assign-btn-mobile, .delete-btn-mobile').show();
    } else {
        $('.selection-actions').hide();
        $mobileNav.removeClass('has-selection');
        $('.selection-count').css('display', 'none');
    }
}

    $(document).on('click', '.assign-btn-mobile', function() {
        $('.assign-users-btn').click();
    });

    $(document).on('click', '.delete-btn-mobile', function() {
        $('.delete-selected-btn').click();
    });

    // Function to get selected lead IDs
function getSelectedLeadIds() {
    const selectedIds = [];
    $('.row-checkbox:checked').each(function() {
        const $row = $(this).closest('tr');
        const leadId = $row.find('.lead-id-section').text().replace('#', '').trim();
        if (leadId) {
            selectedIds.push(leadId);
        }
    });
    return selectedIds;
}

    if ($.fn.DataTable.isDataTable('#leadsTable')) {
        $('#leadsTable').DataTable().clear().destroy();
    }

    // Sample data with last touch information
    var sampleData = [
        {
            "id": "LD003",
            "name": "Michael Brown",
            "profilePic": "https://picsum.photos/100/100?random=1",
            "created": "June 20, 2025, <br>11:20 AM",
            "lastTouch": "Untouched",
            "email": "michael.b@example.com",
            "phone": "+91 98765 43210",
            "assignedLead": "John Smith",
            "assignedProject": "Prestige Raintree park",
            "status": "Scheduled",
            "location": "New York",
            "source": "google-logo.svg"
        },
        {
            "id": "LD004",
            "name": "Hem Chandra Tripathi",
            "profilePic": "https://picsum.photos/100/100?random=2",
            "created": "June 20, 2025, <br>11:20 AM",
            "lastTouch": "Untouched",
            "email": "ayush@example.com",
            "phone": "(555) 789-0123",
            "assignedLead": "Sarah Johnson",
            "assignedProject": "Project B",
            "status": "Converted",
            "location": "Chicago",
            "source": "google-logo.svg"
        },
        {
            "id": "LD005",
            "name": "Abhay Mishra",
            "profilePic": "https://picsum.photos/100/100?random=3",
            "created": "June 20, 2025, <br>11:20 AM",
            "lastTouch": "Untouched",
            "email": "abhay@example.com",
            "phone": "(555) 234-5678",
            "assignedLead": "Mike Davis",
            "assignedProject": "Project C",
            "status": "Follow Up",
            "location": "Los Angeles",
            "source": "google-logo.svg"
        },
        {
            "id": "LD006",
            "name": "Sarah Wilson",
            "profilePic": "https://picsum.photos/100/100?random=4",
            "created": "June 20, 2025, <br>11:20 AM",
            "lastTouch": "Untouched",
            "email": "sarah.w@example.com",
            "phone": "(555) 345-6789",
            "assignedLead": "John Smith",
            "assignedProject": "Project A",
            "status": "New",
            "location": "Miami",
            "source": "google-logo.svg"
        },
        {
            "id": "LD007",
            "name": "David Johnson",
            "profilePic": "https://picsum.photos/100/100?random=5",
            "created": "June 20, 2025, <br>11:20 AM",
            "lastTouch": "Untouched",
            "email": "david.j@example.com",
            "phone": "(555) 567-8901",
            "assignedLead": "Sarah Johnson",
            "assignedProject": "Project B",
            "status": "Pending",
            "location": "Seattle",
            "source": "google-logo.svg"
        },
        {
            "id": "LD008",
            "name": "Emily Davis",
            "profilePic": "https://picsum.photos/100/100?random=6",
            "created": "June 20, 2025, 11:20 AM",
            "lastTouch": "Untouched",
            "email": "emily.d@example.com",
            "phone": "(555) 678-9012",
            "assignedLead": "Mike Davis",
            "assignedProject": "Project C",
            "status": "Active",
            "location": "Boston",
            "source": "google-logo.svg"
        }
    ];

    // Initialize DataTable with data
    table = $('#leadsTable').DataTable({
        data: sampleData,
        responsive: true,
        ordering: false,
        dom: '<"top-container"<"search-container"f><"button-container"B><"length-container"l>>rt<"bottom-container"ip>',
        buttons: [
            {
                text: '<i class="fas fa-filter"></i> Filter',
                className: 'dt-button filter-btn',
                action: function(e, dt, node, config) {
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
                data: null, 
                render: function(data, type, row) {
                    const encryptedPhone = encryptPhone(row.phone);
                    const touchStatus = getLastTouchStatus(row.lastTouch);
                    return `
                        <div class="lead-profile">
                        <div class="left-lead">
                            <img src="${row.profilePic}" alt="${row.name}" class="lead-avatar">
                           
                            <div class="notes-section">
                                <div class="lead-info">
                                <div class="created-info"><b>Created at</b><br>${row.created}</div>
                                <div class="mobile-project-info">
                                    
                                    <div class="lead-name"><h4>${row.name}</h4></div>
                                    
                                    <span class="mobile-project status-badge ${row.status.toLowerCase().replace(' ', '-')}">${row.status}</span>
                                    </div>
                                    <div class="last-touch-status touch-desktop ${touchStatus.class}">${touchStatus.text}</div>
                                    
                                    <div class="mobile-project-info">
                                        <span class="project-name-mobile">Project: ${row.assignedProject}</span>
                                    </div>
                                    <div class="phone-info encrypted" data-real-phone="${row.phone}">${encryptedPhone}</div>
                                </div>
                            </div>
                            </div>
                            <div class="right-lead">
                            <div class="mobile-source">
                                <img src="assets/google-logo.svg" alt="Google" class="source-logo">
                            </div>
                            <div class="last-touch-status touch-mobile ${touchStatus.class}">${touchStatus.text}</div>
                            </div>
                        </div>
                        <div class="created-info-mobile" style="display:none">${row.created}</div>
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
                className: 'expand-btn-cell',
                orderable: false,
                render: function() {
                    return '<button class="expand-row-btn" aria-label="Expand row"><i class="fas fa-chevron-down"></i></button>';
                }
            },
            { 
                data: "email",
                className: 'mobile-hide',
                render: function(data) {
                    return `<div class="contact-info">${data}</div>`;
                }
            },
            { 
                data: null,
                className: 'mobile-hide',
                render: function(data, type, row) {
                    return `
                        <div class="project-info">
                            <div>${row.assignedProject}</div>
                            <span class="status-badge ${row.status.toLowerCase().replace(' ', '-')}">${row.status}</span>
                        </div>
                    `;
                }
            },
            { 
                data: "location",
                className: 'mobile-hide',
                render: function(data) {
                    return `<div class="location-info">${data}</div> `;
                }
            },
            { 
                data: "source",
                className: 'mobile-hide',
                render: function(data) {
                    if(data === "google-logo.svg") {
                        return `<img src="./assets/google-logo.svg" alt="Google" class="source-logo" style="height: 20px; width: auto;">`;
                    } else {
                        return `<span class="source-tag ${data.toLowerCase()}">${data}</span>`;
                    }
                }
            },
            { 
                data: "assignedLead",
                className: 'mobile-hide',
                render: function(data) {
                    return `<div class="assigned-lead">${data}</div>`;
                }
            },
            { 
                data: null,
                className: 'mobile-hide',
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

        
        initComplete: function() {
            $('.top-container').detach().appendTo('#tableControlsContainer');
            
             $('.top-container').css({
        'display': 'flex',
        'align-items': 'center',
        'justify-content': 'space-between',
        'flex-wrap': 'wrap',
        'margin-top':'4px',
        'gap': '10px',
        'width': '100%'
    });
            
            $('.search-container').css({
                'flex': '1',
                'min-width': '200px',
                'max-width': '100%',
                'order': '1'
            });
            
            
            $('.dataTables_filter input').css({
                'width': '100%',
                'padding': '8px 12px',
                'border': '1px solid #dadce0',
                'border-radius': '20px',
                'font-size': '14px',
                'transition': 'border-color 0.2s ease'
            }).attr('placeholder', 'Search leads...');
            
            $('.dataTables_filter label').contents().filter(function() {
                return this.nodeType === 3;
            }).remove();
            
            $('.button-container').css({
                'display': 'flex',
                'align-items': 'center',
                'gap': '10px',
                'order': '2'
            });
            
            $('.length-container').css({
                'order': '3'
            });
            
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
            
            handleResponsiveBehavior();
            
            $('#selectAll').change(function() {
                $('.row-checkbox').prop('checked', $(this).prop('checked'));
                updateSelectionActions();
            });
            
            $(document).on('change', '.row-checkbox', function() {
                if ($('.row-checkbox:checked').length === $('.row-checkbox').length) {
                    $('#selectAll').prop('checked', true);
                } else {
                    $('#selectAll').prop('checked', false);
                }
                updateSelectionActions();
            });
            
            // Initialize filter dropdown functionality
            initFilterDropdowns();
        }
    });

    // Initialize filter dropdown functionality
    function initFilterDropdowns() {
        // Show/hide dropdowns when clicking header buttons
        $(document).on('click', '.filter-header-btn', function(e) {
            e.stopPropagation();
            e.preventDefault();
            
            const $header = $(this).closest('.filter-header');
            const $dropdown = $header.find('.filter-dropdown');
            
            // Hide all other dropdowns
            $('.filter-dropdown').not($dropdown).hide();
            
            // Toggle current dropdown
            $dropdown.toggle();
        });
        
        // Close dropdowns when clicking elsewhere
        $(document).on('click', function() {
            $('.filter-dropdown').hide();
        });
        
        // Prevent dropdown from closing when clicking inside it
        $(document).on('click', '.filter-dropdown', function(e) {
            e.stopPropagation();
        });
        
        // Handle search input in dropdowns
        $(document).on('keyup', '.filter-search-input', function() {
            const searchTerm = $(this).val().toLowerCase();
            const $dropdown = $(this).closest('.filter-dropdown');
            const columnIndex = parseInt($(this).data('column'));
            
            if (searchTerm === '') {
                $dropdown.find('.filter-options label').show();
            } else {
                $dropdown.find('.filter-options label').each(function() {
                    const labelText = $(this).text().toLowerCase();
                    $(this).toggle(labelText.includes(searchTerm));
                });
            }
        });
        
        // Handle filter option selection
        $(document).on('change', '.filter-option', function() {
            const columnIndex = parseInt($(this).data('column'));
            const filterValue = $(this).val();
            const isChecked = $(this).is(':checked');
            
            if (isChecked) {
                if (filterValue === '') {
                    // If "All" is checked, uncheck others
                    $(this).closest('.filter-options').find('.filter-option').not(this).prop('checked', false);
                    table.column(columnIndex).search('').draw();
                } else {
                    // If specific option is checked, uncheck "All"
                    $(this).closest('.filter-options').find('.filter-option[value=""]').prop('checked', false);
                    
                    // Get all checked values for this column
                    const checkedValues = [];
                    $(this).closest('.filter-options').find('.filter-option:checked').each(function() {
                        if ($(this).val() !== '') {
                            checkedValues.push($(this).val());
                        }
                    });
                    
                    if (checkedValues.length > 0) {
                        // Create regex for multiple values
                        const searchRegex = checkedValues.join('|');
                        table.column(columnIndex).search(searchRegex, true, false).draw();
                    } else {
                        // If no specific options are checked, show all
                        table.column(columnIndex).search('').draw();
                    }
                }
            } else {
                // If unchecking, check if no options are selected
                const anyChecked = $(this).closest('.filter-options').find('.filter-option:checked').length > 0;
                if (!anyChecked) {
                    // If nothing is checked, check "All" and show all
                    $(this).closest('.filter-options').find('.filter-option[value=""]').prop('checked', true);
                    table.column(columnIndex).search('').draw();
                } else {
                    // If specific options are still checked, update filter
                    const checkedValues = [];
                    $(this).closest('.filter-options').find('.filter-option:checked').each(function() {
                        if ($(this).val() !== '') {
                            checkedValues.push($(this).val());
                        }
                    });
                    
                    if (checkedValues.length > 0) {
                        const searchRegex = checkedValues.join('|');
                        table.column(columnIndex).search(searchRegex, true, false).draw();
                    }
                }
            }
        });
        
        // Reassign Lead Modal Functionality
function openReassignModal(leadId, leadName) {
    $('body').css('overflow', 'hidden');
    $('#reassignModal').addClass('active').show();
    
    // Populate the form with lead details
    $('#reassignLeadName').val(leadName);
    $('#reassignLeadId').val(leadId);
    
    // Initialize Select2
    $('#reassignTo').select2({
        placeholder: "Select Team Member",
        allowClear: false,
        width: '100%',
        dropdownParent: $('#reassignModal')
    });
}

function closeReassignModal() {
    $('body').css('overflow', 'auto');
    $('#reassignModal').removeClass('active').hide();
    $('#reassignForm')[0].reset();
}

// Handle reassign button click in table rows
$(document).on('click', '.action-btn.reassign', function(e) {
    e.stopPropagation();
    
    const $row = $(this).closest('tr');
    const leadId = $row.find('.lead-id-section').text().replace('#', '');
    const leadName = $row.find('.lead-info h4').text().trim();
    
    openReassignModal(leadId, leadName);
});

// Close modal handlers
$('#closeReassignModal, #cancelReassign').click(function(e) {
    e.preventDefault();
    closeReassignModal();
});

$('#reassignModal .modal-overlay').click(function(e) {
    if ($(e.target).hasClass('modal-overlay')) {
        closeReassignModal();
    }
});

// Prevent modal from closing when clicking inside
$('#reassignModal .modal-container').click(function(e) {
    e.stopPropagation();
});

// Close modal with Escape key
$(document).keydown(function(e) {
    if (e.key === "Escape" && $('#reassignModal').hasClass('active')) {
        closeReassignModal();
    }
});

// Form submission
$('#reassignForm').submit(function(e) {
    e.preventDefault();
    
    // Validate required fields
    if (!$('#reassignTo').val()) {
        $('#reassignTo').closest('.form-group').addClass('error');
        $('#reassignTo').closest('.form-group').find('.error-message').text('Please select a team member');
        return false;
    }
    
    const formData = {
        leadId: $('#reassignLeadId').val(),
        leadName: $('#reassignLeadName').val(),
        assignedTo: $('#reassignTo').val(),
        notes: $('#reassignNotes').val(),
        reassignedBy: "Current User", // You would get this from your auth system
        reassignedAt: new Date().toISOString()
    };
    
    // Show loading state
    const $submitBtn = $('#reassignForm .submit-btn');
    $submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Reassigning...').prop('disabled', true);
    
    // Simulate API call
    setTimeout(function() {
        console.log('Lead reassigned:', formData);
        
        // Update the table row (in a real app, you would update the DataTable data)
        const leadId = formData.leadId;
        $('tr').each(function() {
            if ($(this).find('.lead-id-section').text().includes(leadId)) {
                $(this).find('.assigned-lead').text(formData.assignedTo);
            }
        });
        
        // Reset form and close modal
        $submitBtn.html('Reassign Lead').prop('disabled', false);
        closeReassignModal();
        
        // Show success notification
        showNotification(`Lead ${leadId} reassigned to ${formData.assignedTo}`, 'success');
    }, 1500);
});

        // Handle sort buttons
        $(document).on('click', '.sort-btn', function() {
            const sortDirection = $(this).data('sort');
            const columnIndex = parseInt($(this).data('column'));
            
            // Toggle sorting
            if (sortDirection === 'asc') {
                table.order([columnIndex, 'asc']).draw();
            } else {
                table.order([columnIndex, 'desc']).draw();
            }
            
            // Close the dropdown
            $(this).closest('.filter-dropdown').hide();
        });
    }

    $(document).on('click', '.filter-header', function(e) {
        // Only prevent sorting if clicking on the button or dropdown
        if ($(e.target).closest('.filter-header-btn, .filter-dropdown').length) {
            e.stopPropagation();
            e.preventDefault();
            return false;
        }
    });

    

   

    function handleResponsiveBehavior() {
        const isMobile = window.innerWidth <= 900;
        
        // Show/hide columns based on screen size
        if (isMobile) {
            $('.mobile-hide').hide();
            $('.mobile-project').show();
        } else {
            $('.mobile-hide').show();
            $('.mobile-project').hide();
        }
        
        $('#leadsTable tbody tr').each(function() {
            const $row = $(this);
            const detailsContent = createDetailsContent($row);
            const leadId = $row.find('td:eq(1) .lead-id-section').text();
            let $detailsRow = $row.next('.details-row');
            
            $row.find('.expand-row-btn').show();
            
            if (detailsContent) {
                if ($detailsRow.length) {
                    $detailsRow.find('.details-content').html(detailsContent);
                } else {
                    $detailsRow = $(`
                        <tr class="details-row" data-parent-id="${leadId}">
                            <td colspan="10">
                                <div class="details-content">
                                    ${detailsContent}
                                </div>
                            </td>
                        </tr>
                    `);
                    $row.after($detailsRow);
                }
                
                $detailsRow.hide();
            } else if ($detailsRow.length) {
                $detailsRow.remove();
            }
        });
    }
    
    function createDetailsContent(row) {
        const hiddenColumns = [];
        const headers = $('#leadsTable thead th');
        const excludedColumns = [0,1, 5,7]; // Exclude checkbox and expand button columns
        
        // Get the creation date from the hidden mobile element
        const creationDate = row.find('.created-info-mobile').html();
        
        for (let i = 0; i < headers.length; i++) {
            if (excludedColumns.includes(i)) continue;
            
            const header = $(headers[i]);
            const cell = row.find(`td:eq(${i})`);
            
            if (cell.css('display') === 'none' || window.innerWidth <= 900) {
                const headerText = header.find('.filter-header-btn').text().trim() || header.text().trim();
                if (headerText) {
                    // For ID column, show creation date instead
                    if (headerText.includes('ID')) {
                        hiddenColumns.push({
                            header: 'Created',
                            content: creationDate
                        });
                    } else {
                        hiddenColumns.push({
                            header: headerText,
                            content: cell.html()
                        });
                    }
                }
            }
        }
        
        if (hiddenColumns.length > 0) {
            let detailsHTML = '';
            hiddenColumns.forEach(column => {
                detailsHTML += `
                    <div class="details-block">
                        <strong>${column.header}:</strong>
                        <div>${column.content}</div>
                    </div>
                `;
            });
            return detailsHTML;
        }
        return '';
    }

    $(document).ready(function() {
    // Function to open modal
    function openAddLeadModal() {
        $('body').css('overflow', 'hidden');
        $('#addLeadModal').addClass('active').show();
    }
    
    // Function to close modal
    function closeAddLeadModal() {
        $('body').css('overflow', 'auto');
        $('#addLeadModal').removeClass('active').hide();
    }
    
    // Open modal when clicking any + button (floating, mobile, etc.)
    $(document).on('click', '.action-button:has(.fa-plus), .add-btn-mobile', function(e) {
        e.preventDefault();
        openAddLeadModal();
    });
    
    // Close modal when clicking close button, cancel button, or overlay
    $('#closeAddLeadModal, #cancelAddLead').click(function(e) {
        e.preventDefault();
        closeAddLeadModal();
    });
    
    $('.modal-overlay').click(function(e) {
        if ($(e.target).hasClass('modal-overlay')) {
            closeAddLeadModal();
        }
    });
    
    // Prevent modal from closing when clicking inside the modal container
    $('.modal-container').click(function(e) {
        e.stopPropagation();
    });
    
    // Close modal when pressing Escape key
    $(document).keydown(function(e) {
        if (e.key === "Escape" && $('#addLeadModal').hasClass('active')) {
            closeAddLeadModal();
        }
    });
    
    // Form submission handling
    $('#addLeadForm').submit(function(e) {
        e.preventDefault();
        
        // Reset error states
        $('.form-group').removeClass('error');
        $('.error-message').text('');
        
        let isValid = true;
        
        // Validate required fields
        $('#addLeadForm [required]').each(function() {
            if (!$(this).val().trim()) {
                const $formGroup = $(this).closest('.form-group');
                $formGroup.addClass('error');
                $formGroup.find('.error-message').text('This field is required');
                isValid = false;
                
                // Focus on first invalid field
                if (isValid === false) {
                    $(this).focus();
                    isValid = null; // Prevents changing back to true
                }
            }
        });
        
        if (!isValid) return false;
        
        // Validate phone number
        const phone = $('#leadPhone').val().trim();
        if (!/^\d{10}$/.test(phone)) {
            $('#leadPhone').closest('.form-group').addClass('error');
            $('#leadPhone').closest('.form-group').find('.error-message').text('Please enter a valid 10-digit phone number');
            $('#leadPhone').focus();
            return false;
        }
        
        // Validate email if provided
        const email = $('#leadEmail').val().trim();
        if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            $('#leadEmail').closest('.form-group').addClass('error');
            $('#leadEmail').closest('.form-group').find('.error-message').text('Please enter a valid email address');
            $('#leadEmail').focus();
            return false;
        }
        
        // Form is valid - process submission
        const formData = {
            name: $('#leadName').val().trim(),
            phone: '+91' + phone,
            email: email || null,
            project: $('#leadProject').val(),
            source: $('#leadSource').val(),
            status: 'New',
            created: new Date().toISOString()
        };
        
        // Show loading state
        const $submitBtn = $('.submit-btn');
        $submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Adding...').prop('disabled', true);
        
        // Simulate API call
        setTimeout(function() {
            // In a real app, you would make an AJAX call here
            console.log('Form submitted:', formData);
            
            // Add to DataTable (simulated)
            if (typeof table !== 'undefined') {
                table.row.add({
                    id: 'LD' + (1000 + Math.floor(Math.random() * 9000)),
                    name: formData.name,
                    profilePic: 'https://picsum.photos/100/100?random=' + Math.floor(Math.random() * 100),
                    created: new Date().toLocaleString('en-US', { 
                        month: 'short', 
                        day: 'numeric', 
                        year: 'numeric', 
                        hour: '2-digit', 
                        minute: '2-digit' 
                    }),
                    lastTouch: 'Untouched',
                    email: formData.email,
                    phone: formData.phone,
                    assignedLead: 'You',
                    assignedProject: formData.project,
                    status: 'New',
                    location: 'Unknown',
                    source: formData.source.toLowerCase().replace(' ', '-') + '-logo.svg'
                }).draw();
            }
            
            // Reset form and close modal
            $('#addLeadForm')[0].reset();
            $submitBtn.html('Add Lead').prop('disabled', false);
            closeAddLeadModal();
            
            // Show success notification
            showNotification('Lead added successfully!', 'success');
            
        }, 1500);
    });
    
    // Phone number input validation
    $('#leadPhone').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10);
    });
    
    // Helper function to show notifications
    function showNotification(message, type) {
        const $notification = $('<div class="notification ' + type + '">' + message + '</div>');
        $('body').append($notification);
        
        setTimeout(function() {
            $notification.addClass('show');
        }, 10);
        
        setTimeout(function() {
            $notification.removeClass('show');
            setTimeout(function() {
                $notification.remove();
            }, 300);
        }, 3000);
    }
});

// Delete Leads Modal Functionality
function openDeleteModal(selectedIds) {
    $('body').css('overflow', 'hidden');
    $('#deleteModal').addClass('active').show();
    
    // Update the message based on number of selected leads
    const count = selectedIds.length;
    let message = `Are you sure you want to delete ${count} selected lead${count > 1 ? 's' : ''}? This action cannot be undone.`;
    $('#deleteMessage').text(message);
    
    // Show list of selected leads if less than 10
    if (count > 0 && count <= 10) {
        $('#selectedLeadsList').show();
        const $list = $('#leadsToDelete').empty();
        
        // Find and list each selected lead
        selectedIds.forEach(id => {
            const leadName = $(`tr:contains(${id})`).find('.lead-info h4').text().trim();
            $list.append(`<li><i class="fas fa-user" style="margin-right: 8px;"></i> ${leadName} (${id})</li>`);
        });
    } else {
        $('#selectedLeadsList').hide();
    }
}

function closeDeleteModal() {
    $('body').css('overflow', 'auto');
    $('#deleteModal').removeClass('active').hide();
}

// Handle delete button clicks
$(document).on('click', '.delete-selected-btn, .delete-btn-mobile', function(e) {
    e.preventDefault();
    
    const selectedIds = getSelectedLeadIds();
    if (selectedIds.length === 0) {
        showNotification('Please select at least one lead to delete', 'error');
        return;
    }
    
    openDeleteModal(selectedIds);
});

// Close modal handlers
$('#closeDeleteModal, #cancelDelete').click(function(e) {
    e.preventDefault();
    closeDeleteModal();
});

$('#deleteModal .modal-overlay').click(function(e) {
    if ($(e.target).hasClass('modal-overlay')) {
        closeDeleteModal();
    }
});

// Prevent modal from closing when clicking inside
$('#deleteModal .modal-container').click(function(e) {
    e.stopPropagation();
});

// Close modal with Escape key
$(document).keydown(function(e) {
    if (e.key === "Escape" && $('#deleteModal').hasClass('active')) {
        closeDeleteModal();
    }
});

// Form submission
$('#deleteForm').submit(function(e) {
    e.preventDefault();
    
    const selectedIds = getSelectedLeadIds();
    if (selectedIds.length === 0) {
        showNotification('No leads selected for deletion', 'error');
        closeDeleteModal();
        return;
    }
    
    // Show loading state
    const $submitBtn = $('#deleteForm .delete-btn');
    $submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Deleting...').prop('disabled', true);
    
    // Simulate API call
    setTimeout(function() {
        console.log('Deleting leads:', selectedIds);
        
        // In a real app, you would make an API call here and then:
        // 1. Remove the rows from the DataTable
        // 2. Update the table display
        
        // For this demo, we'll just remove the selected rows
        selectedIds.forEach(id => {
    // Find the row in DataTable by ID and remove it
    table.rows(function(idx, data, node) {
        return data.id === id;
    }).remove();
});
table.draw();
        
        // Reset checkboxes and selection actions
        $('#selectAll').prop('checked', false);
        $('.row-checkbox').prop('checked', false);
        updateSelectionActions();
        
        // Close modal and show notification
        $submitBtn.html('Delete Leads').prop('disabled', false);
        closeDeleteModal();
        showNotification(`${selectedIds.length} lead${selectedIds.length > 1 ? 's' : ''} deleted successfully`, 'success');
    }, 1500);
});

    // Updated expand button click handler
    $(document).on('click', '.expand-row-btn', function(e) {
        e.stopPropagation();
        e.preventDefault();
        
        const $btn = $(this);
        const $icon = $btn.find('i');
        const $row = $btn.closest('tr');
        const $detailsRow = $row.next('.details-row');
        
        // Close any previously expanded row
        if (currentExpandedRow && currentExpandedRow !== $row[0]) {
            const $prevRow = $(currentExpandedRow);
            const $prevDetails = $prevRow.next('.details-row');
            const $prevIcon = $prevRow.find('.expand-row-btn i');
            $prevDetails.hide();
            $prevIcon.removeClass('rotated');
        }
        
        // Toggle current row
        if ($detailsRow.is(':visible')) {
            $detailsRow.hide();
            $icon.removeClass('rotated');
        } else {
            $detailsRow.show();
            $icon.addClass('rotated');
        }
        
        // Update current expanded row reference
        currentExpandedRow = $detailsRow.is(':visible') ? $row[0] : null;
});



$(document).on('click', '.filter-header', function(e) {
    // Only prevent sorting if clicking on the button or dropdown
    if ($(e.target).closest('.filter-header-btn, .filter-dropdown').length) {
        e.stopPropagation();
        e.preventDefault();
        return false;
    }
});
    // Updated row click handler with proper previous row handling
    $(document).on('click', '#leadsTable tbody tr', function(e) {
        // Skip if clicking on action buttons, dropdowns, checkboxes, or expand button
        if ($(e.target).closest('.action-btn, .filter-dropdown, .filter-header-btn, a, input[type="checkbox"], .expand-row-btn').length) {
            return;
        }
        
        // Skip if clicking on details rows
        if ($(this).hasClass('details-row')) {
            return;
        }
        
        const $currentRow = $(this);
        const $currentPhoneInfo = $currentRow.find('.phone-info');
        const $currentDetailsRow = $currentRow.next('.details-row');
        
        // Handle previous row cleanup
        if (currentPhoneRow && currentPhoneRow !== $currentRow[0]) {
            const $prevRow = $(currentPhoneRow);
            const $prevPhone = $prevRow.find('.phone-info');
            const $prevDetailsRow = $prevRow.next('.details-row');
            
            // Encrypt previous row's phone number if it's decrypted
            if ($prevPhone.length && !$prevPhone.hasClass('encrypted')) {
                const realPhone = $prevPhone.data('real-phone');
                const encryptedPhone = encryptPhone(realPhone);
                $prevPhone.text(encryptedPhone).addClass('encrypted');
            }
            
            // Close previous row's details if it's open
            if ($prevDetailsRow.length && $prevDetailsRow.is(':visible')) {
                $prevDetailsRow.hide();
                $prevRow.find('.expand-row-btn i').removeClass('fa-minus').addClass('fa-plus');
            }
        }
        
        // Handle current row phone number toggle
        if ($currentPhoneInfo.length) {
            if ($currentPhoneInfo.hasClass('encrypted')) {
                // Decrypt current row's phone
                const realPhone = $currentPhoneInfo.data('real-phone');
                $currentPhoneInfo.text(realPhone).removeClass('encrypted');
            } else {
                // Encrypt current row's phone
                const realPhone = $currentPhoneInfo.data('real-phone');
                const encryptedPhone = encryptPhone(realPhone);
                $currentPhoneInfo.text(encryptedPhone).addClass('encrypted');
            }
        }
        
        // In the row click handler, update the icon rotation handling:
if ($currentDetailsRow.length) {
    const $expandBtn = $currentRow.find('.expand-row-btn');
    const $icon = $expandBtn.find('i');
    
    if ($currentDetailsRow.is(':visible')) {
        // Close current details
        $currentDetailsRow.hide();
        $icon.removeClass('rotated');
        currentExpandedRow = null;
    } else {
        // Open current details
        $currentDetailsRow.show();
        $icon.addClass('rotated');
        currentExpandedRow = $currentRow[0];
    }
}
        
        // Update tracking variables
        currentPhoneRow = $currentRow[0];
    });

    // Handle table redraw events
    table.on('draw', function() {
        $('#leadsTable tbody tr').each(function() {
            const $row = $(this);
    const $detailsRow = $row.next('.details-row');
    const $icon = $row.find('.expand-row-btn i');
    
    // Reset expand button icons
    $icon.removeClass('rotated');
    if ($detailsRow.length && $detailsRow.is(':visible')) {
        $icon.addClass('rotated');
    }
            
            // Ensure phone numbers are encrypted after redraw
            $row.find('.phone-info').each(function() {
                const $phoneInfo = $(this);
                if (!$phoneInfo.hasClass('encrypted')) {
                    const realPhone = $phoneInfo.data('real-phone');
                    const encryptedPhone = encryptPhone(realPhone);
                    $phoneInfo.text(encryptedPhone).addClass('encrypted');
                }
            });
            
            // Handle mobile view for lead source
            if (window.innerWidth <= 900) {
                $row.find('.mobile-source').show();
            } else {
                $row.find('.mobile-source').hide();
            }
        });
        
        // Reset tracking variables
        currentExpandedRow = null;
        currentPhoneRow = null;
        handleResponsiveBehavior();
    });

    // Handle window resize
    let resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            handleResponsiveBehavior();
        }, 250);
    });

    // Track current active filter
    var currentActiveFilter = 'my';

    // Function to handle filter button clicks
    function handleFilterButtonClick(button) {
        const $button = $(button);
        const filterValue = $button.text().trim().split(' ')[0].toLowerCase();

        // Skip the "Filter Status" button
        if (filterValue === 'filter') return;

        // If clicking the already active button, deselect it and show all
        if ($button.hasClass('active')) {
            $button.removeClass('active');
            currentActiveFilter = null;
            table.search('').columns().search('').draw();
            return;
        }

        // Remove active class from all buttons in both rows
        $('.tab-row .filter-btn, .filter-row .filter-btn').removeClass('active');

        // Add active class to clicked button
        $button.addClass('active');
        currentActiveFilter = filterValue;

        // Apply the appropriate filter
        applyActiveFilter(filterValue);
    }

    // Function to apply the active filter
    function applyActiveFilter(filterValue) {
        // Map filter names to column searches
        const filterMap = {
            // Tab row filters
            'my': { column: null, search: '' }, // Show all
            'booked': { column: 5, search: 'Converted' },
            'today': { column: 5, search: 'Follow Up' },
            'dropped': { column: 5, search: 'Dropped' },
            'ads': { column: 7, search: 'Google' },
            'shi-d': { column: null, search: '' }, // Custom filter
            
            // Status row filters
            'active': { column: 5, search: 'Active' },
            'new': { column: 5, search: 'New' },
            'pending': { column: 5, search: 'Pending' },
            'follow': { column: 5, search: 'Follow Up' },
            'untouched': { column: 5, search: 'Untouched' }
        };

        const filterConfig = filterMap[filterValue] || { column: null, search: '' };

        if (filterConfig.column !== null) {
            table.column(filterConfig.column).search(filterConfig.search).draw();
        } else {
            table.search('').columns().search('').draw();
        }
    }

    // Click handler for filter buttons
    $(document).on('click', '.tab-row .filter-btn, .filter-row .filter-btn', function(e) {
        e.preventDefault();
        handleFilterButtonClick(this);
    });

    // Initialize with "My Leads" as default active
    function initializeFilters() {
        // Set "My Leads" as default active
        $('.tab-row .filter-btn').first().addClass('active');
        currentActiveFilter = 'my';
        
        // Clear all filters initially
        table.search('').columns().search('').draw();
    }

    // Call initialization after table is ready
    initializeFilters();

    // Optional: Add visual feedback for button interactions
    $(document).on('mouseenter', '.filter-btn', function() {
        if (!$(this).hasClass('active')) {
            $(this).addClass('hover');
        }
    });

    $(document).on('mouseleave', '.filter-btn', function() {
        $(this).removeClass('hover');
    });

    // Handle mobile filter button
    $(document).on('click', '.filter-btn-mobile', function() {
        // Toggle mobile filter panel or show filter options
        $('.filter-row').toggleClass('mobile-visible');
    });
});
$(document).on('click', '.filter-btn-mobile, .dt-button.filter-btn', function() {
        $('#filterModal').show();
        $('body').css('overflow', 'hidden');
        
        // Initialize Select2 after modal is shown
        $('.select-input').select2({
            placeholder: "Select options",
            allowClear: true,
            width: '100%',
            dropdownParent: $('#filterModal') // Important for proper positioning
        });
    });

    $(document).ready(function() {
    // Custom formatting for dropdown options
    function formatOption(option) {
        if (!option.id) return option.text;
        
        // Add icons or additional info to options
        const $option = $(
            `<div class="flex items-center">
                <span class="option-text">${option.text}</span>
            </div>`
        );
        return $option;
    }
    
    // Custom formatting for selected items
    function formatSelection(option) {
        if (!option.id) return option.text;
        
        // Show just the text for selected items
        return option.text;
    }
});

$(document).ready(function() {
    
    // Initialize Select2 for multi-select dropdowns
    $('.select-input').select2({
        placeholder: "Select options",
        allowClear: true,
        width: '100%'
    });

    // Open filter modal
    $(document).on('click', '.filter-btn-mobile, .dt-button.filter-btn', function() {
    $('#filterModal').show();
    $('body').css('overflow', 'hidden');
});



    // Close filter modal
    $('#closeFilterModal').click(function() {
        $('#filterModal').hide();
        $('body').css('overflow', 'auto');
    });

    // Click outside modal to close
    $('.modal-overlay').click(function(e) {
        if ($(e.target).hasClass('modal-overlay')) {
            $('#filterModal').hide();
            $('body').css('overflow', 'auto');
        }
    });

    // Toggle filter option buttons
    $(document).on('click', '.filter-option-btn', function() {
        $(this).toggleClass('active');
    });

    // Reset all filters
    $('#resetFilters').click(function() {
        $('.filter-option-btn').removeClass('active');
        $('.select-input').val(null).trigger('change');
        $('#startDate, #endDate').val('');
        
        // Clear all table filters
        table.search('').columns().search('').draw();
    });

    
    // Apply filters
    $('#filterForm').submit(function(e) {
        e.preventDefault();

        // Textbox filters
        const nameVal = $('#filterName').val().trim();
        const idVal = $('#filterId').val().trim();
        const emailVal = $('#filterEmail').val().trim();
        const assignedLeadVal = $('#filterAssignedLead').val().trim();

        // Dropdown filters
        const statusFilters = $('#statusFilter').val() || [];
        const sourceFilters = $('#sourceFilter').val() || [];
        const projectFilters = $('#projectFilter').val() || [];
        const locationFilters = $('#locationFilter').val() || [];

        // Date range
        const startDate = $('#startDate').val();
        const endDate = $('#endDate').val();

        // Apply filters to DataTable
        // Name (column 1)
        table.column(1).search(nameVal, false, false);
        // ID (column 2)
        table.column(2).search(idVal, false, false);
        // Email (column 4)
        table.column(4).search(emailVal, false, false);
        // Assigned Lead (column 8)
        table.column(8).search(assignedLeadVal, false, false);

        // Status (column 5)
        if (statusFilters.length > 0) {
            table.column(5).search(statusFilters.join('|'), true, false);
        } else {
            table.column(5).search('');
        }
        // Source (column 7)
        if (sourceFilters.length > 0) {
            table.column(7).search(sourceFilters.join('|'), true, false);
        } else {
            table.column(7).search('');
        }
        // Project (column 5)
        if (projectFilters.length > 0) {
            table.column(5).search(projectFilters.join('|'), true, false);
        }
        // Location (column 6)
        if (locationFilters.length > 0) {
            table.column(6).search(locationFilters.join('|'), true, false);
        } else {
            table.column(6).search('');
        }

        // Date range (custom, not implemented here)
        // You can add custom filtering for date if needed

        table.draw();

        // Close modal
        $('#filterModal').hide();
        $('body').css('overflow', 'auto');
    });

    // Close modal with Escape key
    $(document).keydown(function(e) {
        if (e.key === "Escape" && $('#filterModal').is(':visible')) {
            $('#filterModal').hide();
            $('body').css('overflow', 'auto');
        }
    });
});

function getSelectedLeadIds() {
    const selectedIds = [];
    $('.row-checkbox:checked').each(function() {
        const $row = $(this).closest('tr');
        const leadId = $row.find('.lead-id-section').text().replace('#', '').trim();
        if (leadId) {
            selectedIds.push(leadId);
        }
    });
    return selectedIds;
}


// Function to open assign modal
function openAssignModal() {
    const selectedIds = getSelectedLeadIds(); // Use the global function
    if (selectedIds.length === 0) {
        showNotification('Please select at least one lead to assign.', 'error');
        return;
    }

    // Update the modal with selected leads info
    $('#selectedLeadsCount').text(selectedIds.length);

    // Clear and populate the selected leads list
    const $selectedLeadsList = $('#selectedLeadsList');
    $selectedLeadsList.empty();

    // Get the names of selected leads
    $('.row-checkbox:checked').each(function() {
        const $row = $(this).closest('tr');
        const leadId = $row.find('.lead-id-section').text();
        const leadName = $row.find('.lead-info h4').text();

        $selectedLeadsList.append(`
            <div class="selected-lead-item">
                <span class="lead-id">${leadId}</span>
                <span class="lead-name">${leadName}</span>
            </div>
        `);
    });

    // Open the modal
    $('body').css('overflow', 'hidden');
    $('#assignModal').addClass('active').show();

    // Initialize Select2
    $('#assignTo').select2({
        placeholder: "Select Team Member",
        allowClear: false,
        width: '100%',
        dropdownParent: $('#assignModal')
    });
}
// Function to close assign modal
function closeAssignModal() {
    $('body').css('overflow', 'auto');
    $('#assignModal').removeClass('active').hide();
}

// Handle assign button click
$(document).on('click', '.assign-users-btn, .assign-btn-mobile', function(e) {
    e.preventDefault();
    openAssignModal();
});

// Close modal when clicking close button, cancel button, or overlay
$('#closeAssignModal, #cancelAssign').click(function(e) {
    e.preventDefault();
    closeAssignModal();
});

$('#assignModal').click(function(e) {
    if ($(e.target).hasClass('modal-overlay')) {
        closeAssignModal();
    }
});

// Prevent modal from closing when clicking inside the modal container
$('#assignModal .modal-container').click(function(e) {
    e.stopPropagation();
});

// Close modal when pressing Escape key
$(document).keydown(function(e) {
    if (e.key === "Escape" && $('#assignModal').hasClass('active')) {
        closeAssignModal();
    }
});

// Form submission handling
$('#assignForm').submit(function(e) {
    e.preventDefault();
    
    // Reset error states
    $('.form-group').removeClass('error');
    $('.error-message').text('');
    
    // Validate required fields
    if (!$('#assignTo').val()) {
        $('#assignTo').closest('.form-group').addClass('error');
        $('#assignTo').closest('.form-group').find('.error-message').text('Please select a team member');
        $('#assignTo').focus();
        return false;
    }
    
    const selectedIds = getSelectedLeadIds();
    const assignTo = $('#assignTo').val();
    const assignNote = $('#assignNote').val();
    
    // Show loading state
    const $submitBtn = $('.submit-btn');
    $submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Assigning...').prop('disabled', true);
    
    // Simulate API call
    setTimeout(function() {
        // In a real app, you would make an AJAX call here
        console.log('Assigning leads:', {
            leadIds: selectedIds,
            assignTo: assignTo,
            note: assignNote
        });
        
        // Update the table with new assignments
        $('.row-checkbox:checked').each(function() {
            const $row = $(this).closest('tr');
            $row.find('.assigned-lead').text(assignTo);
        });
        
        // Reset form and close modal
        $('#assignForm')[0].reset();
        $submitBtn.html('Assign Leads').prop('disabled', false);
        closeAssignModal();
        
        // Uncheck all checkboxes
        $('.row-checkbox').prop('checked', false);
        $('#selectAll').prop('checked', false);
        updateSelectionActions();
        
        // Show success notification
        showNotification(`${selectedIds.length} leads assigned successfully!`, 'success');
        
    }, 1500);
});


</script>

<?php include 'htmlclose.php'; ?>