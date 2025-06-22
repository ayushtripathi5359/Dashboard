// State management
const state = {
  sidebarCollapsed: false,
  darkMode: false, // Removed localStorage for PHP compatibility
  currentPage: 'dashboard'
};

// DOM elements
const sidebar = document.getElementById('sidebar');
const mainContent = document.getElementById('mainContent');
const themeToggle = document.getElementById('themeToggle');
const themeIcon = document.getElementById('themeIcon');
const mobileOverlay = document.getElementById('mobileOverlay');
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const searchBtn = document.getElementById('searchBtn');
const notificationBtn = document.getElementById('notificationBtn');

// Initialize the application
function init() {
  setupEventListeners();
  applyTheme();
  setupResponsiveDesign();
  animateStats();
  setupTooltips();
}

// Event listeners
function setupEventListeners() {
  // Theme toggle
  if (themeToggle) {
    themeToggle.addEventListener('change', toggleTheme);
  }
  
  // Mobile menu
  if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', toggleMobileSidebar);
  }
  if (mobileOverlay) {
    mobileOverlay.addEventListener('click', closeMobileSidebar);
  }
  
  // Header buttons
  if (searchBtn) {
    searchBtn.addEventListener('click', handleSearch);
  }
  if (notificationBtn) {
    notificationBtn.addEventListener('click', handleNotifications);
  }
  
  // Window resize
  window.addEventListener('resize', handleResize);
  
  // Keyboard shortcuts
  document.addEventListener('keydown', handleKeyboardShortcuts);
}

// Mobile sidebar functionality
function toggleMobileSidebar() {
  if (sidebar) {
    sidebar.classList.toggle('mobile-open');
  }
  if (mobileOverlay) {
    mobileOverlay.classList.toggle('active');
  }
  document.body.style.overflow = sidebar && sidebar.classList.contains('mobile-open') ? 'hidden' : '';
}

function closeMobileSidebar() {
  if (sidebar) {
    sidebar.classList.remove('mobile-open');
  }
  if (mobileOverlay) {
    mobileOverlay.classList.remove('active');
  }
  document.body.style.overflow = '';
}

// Theme functionality
function toggleTheme() {
  state.darkMode = themeToggle.checked;
  applyTheme();
}

function applyTheme() {
  if (state.darkMode) {
    document.documentElement.setAttribute('data-theme', 'dark');
    if (themeIcon) {
      themeIcon.className = 'fas fa-sun';
    }
    if (themeToggle) {
      themeToggle.checked = true;
    }
  } else {
    document.documentElement.removeAttribute('data-theme');
    if (themeIcon) {
      themeIcon.className = 'fas fa-moon';
    }
    if (themeToggle) {
      themeToggle.checked = false;
    }
  }
}

// Header functionality
function handleSearch() {
  const searchQuery = prompt('Enter search query:');
  if (searchQuery) {
    console.log('Searching for:', searchQuery);
  }
}

function handleNotifications() {
  alert('Notifications panel would open here');
}

// Responsive design
function setupResponsiveDesign() {
  handleResize();
}

function handleResize() {
  const isMobile = window.innerWidth <= 1024;
  
  if (mobileMenuBtn) {
    if (isMobile) {
      mobileMenuBtn.style.display = 'flex';
    } else {
      mobileMenuBtn.style.display = 'none';
      closeMobileSidebar();
    }
  }
}

// Keyboard shortcuts
function handleKeyboardShortcuts(e) {
  // Ctrl/Cmd + K: Search
  if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
    e.preventDefault();
    handleSearch();
  }
  
  // Ctrl/Cmd + D: Toggle dark mode
  if ((e.ctrlKey || e.metaKey) && e.key === 'd') {
    e.preventDefault();
    if (themeToggle) {
      themeToggle.click();
    }
  }
  
  // Escape: Close mobile sidebar
  if (e.key === 'Escape') {
    closeMobileSidebar();
  }
}

// Animations
function animateStats() {
  const statValues = document.querySelectorAll('.stat-value');
  
  statValues.forEach((stat, index) => {
    const finalValue = stat.textContent;
    const numericValue = parseInt(finalValue.replace(/[^0-9]/g, ''));
    
    if (numericValue) {
      stat.textContent = '0';
      
      setTimeout(() => {
        animateNumber(stat, 0, numericValue, finalValue, 1000);
      }, index * 200);
    }
  });
}

function animateNumber(element, start, end, finalText, duration) {
  const startTime = performance.now();
  const isPrice = finalText.includes('$');
  const suffix = finalText.replace(/[0-9,]/g, '');
  
  function update(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const current = Math.floor(start + (end - start) * easeOutCubic(progress));
    
    if (isPrice) {
      element.textContent = '$' + current.toLocaleString();
    } else {
      element.textContent = current.toLocaleString() + suffix.replace(',', '');
    }
    
    if (progress < 1) {
      requestAnimationFrame(update);
    } else {
      element.textContent = finalText;
    }
  }
  
  requestAnimationFrame(update);
}

function easeOutCubic(t) {
  return 1 - Math.pow(1 - t, 3);
}

// Tooltips
function setupTooltips() {
  // Tooltips are handled by CSS
}

// Utility functions
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

// Error handling
window.addEventListener('error', (e) => {
  console.error('Dashboard error:', e.error);
});

// Initialize when DOM is loaded
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', () => {
    init();
  });
} else {
  init();
}

const sidebarCloseBtn = document.getElementById('sidebarCloseBtn');
if (sidebarCloseBtn) {
  sidebarCloseBtn.addEventListener('click', closeMobileSidebar);
}


      $('#leadsTable').DataTable({
        pageLength: 10,
        dom: '<"top"lf>rt<"bottom"ip><"clear">',
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search..."
        }
      });

      // Tab logic
      $('.tab-btn').click(function () {
        $('.tab-btn').removeClass('active');
        $(this).addClass('active');
      });

      // Filter logic
      $('.filter-btn').click(function () {
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
      });




// Add resize debouncing
window.addEventListener('resize', debounce(handleResize, 250));