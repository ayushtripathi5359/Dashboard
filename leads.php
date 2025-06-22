<?php
$pageTitle = "Leads";
include 'htmlopen.php';
include 'header.php';
?>

<div class="container">

    <!-- Enhanced Leads Table -->
    <div class="container">
        <!-- Tab Filters -->
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

        <!-- Filter Buttons -->
        <div class="filter-row">
            <!-- <button class="filter-btn active">
                <i class="fas fa-user"></i> Lead
            </button> -->
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
        <div class="dashboard-card">
            <div class="card-header-leads">
                <h3 class="card-title-leads">All Leads</h3>
                <div class="header-actions-leads">
                    <button class="action-button">
                        <i class="fas fa-plus"></i> Add New Lead
                    </button>
                    <a href="#" class="view-link">
                        <i class="fas fa-download"></i> Export
                    </a>
                </div>
            </div>
            <div class="table-container">
                <table class="enhanced-table" id="leadsTable">
                    <thead>
                        <tr>
                            <th>LEAD</th>
                            <th>ID</th>
                            <th>CONTACT</th>
                            <th>STATUS</th>
                            <th>SOURCE</th>
                            <th>NOTES</th>
                            <th>LAST CONTACT</th>
                            <th>UPDATE STATUS</th>
                            <th>ACTIONS</th>
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
                                    <div>emily.d@example.com</div>
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
                                    <div>robert.w@example.com</div>
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
                                        <h4>Kshitiz</h4>
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
                                        <h4>Michael Brown</h4>
                                    </div>
                                    
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="lead-id-section">#LD004</div>
                            </td>
                            <td>
                                <div class="contact-info">
                                    <div>emily.d@example.com</div>
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
                                        <h4>Michael Brown</h4>
                                    </div>
                                    
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="lead-id-section">#LD005</div>
                            </td>
                            <td>
                                <div class="contact-info">
                                    <div>robert.w@example.com</div>
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
                                        <h4>Michael Brown</h4>
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
                                        <h4>Michael Brown</h4>
                                    </div>
                                    
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="lead-id-section">#LD004</div>
                            </td>
                            <td>
                                <div class="contact-info">
                                    <div>emily.d@example.com</div>
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
                                        <h4>Michael Brown</h4>
                                    </div>
                                    
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="lead-id-section">#LD005</div>
                            </td>
                            <td>
                                <div class="contact-info">
                                    <div>robert.w@example.com</div>
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
                                        <h4>Michael Brown</h4>
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
            dom: '<"top"lf>rt<"bottom"ip><"clear">',
            language: {
                search: "Search leads:",
                lengthMenu: "Show _MENU_ leads per page",
                info: "Showing _START_ to _END_ of _TOTAL_ leads",
                infoEmpty: "No leads found",
                infoFiltered: "(filtered from _MAX_ total leads)"
            },
            columnDefs: [
                { targets: [8], orderable: false }, // Actions column not sortable
                { targets: [0, 1, 2], className: 'text-center' }
            ]
        });

        // Enhanced Tab functionality with smooth transitions
        $('.tab-btn').click(function() {
            $('.tab-btn').removeClass('active');
            $(this).addClass('active');
            
            // Add visual feedback
            $(this).addClass('clicked');
            setTimeout(() => {
                $(this).removeClass('clicked');
            }, 200);
            
            console.log('Tab clicked:', $(this).text().trim());
        });

        // Enhanced Filter functionality
        $('.filter-btn').click(function() {
            if (!$(this).hasClass('active')) {
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');
                
                // Add visual feedback
                $(this).addClass('clicked');
                setTimeout(() => {
                    $(this).removeClass('clicked');
                }, 200);
                
                console.log('Filter clicked:', $(this).text().trim());
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

        // Enhanced Export functionality
        $('.view-link').click(function(e) {
            e.preventDefault();
            
            // Add click animation
            $(this).addClass('clicked');
            setTimeout(() => {
                $(this).removeClass('clicked');
            }, 300);
            
            alert('Exporting leads data...');
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
    </script>


<?php include 'htmlclose.php'; ?>