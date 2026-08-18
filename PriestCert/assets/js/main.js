/**
 * Department of Christian Religious Affairs
 * Priesthood Identity / Passport Certification System
 * Client-side Interactivity Script
 */

document.addEventListener('DOMContentLoaded', () => {
    // Sidebar toggle & backdrop overlay functionality
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebar = document.getElementById('app-sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');

    const toggleSidebar = (show) => {
        if (!sidebar) return;
        const isHidden = sidebar.classList.contains('-translate-x-full');
        const shouldShow = show !== undefined ? show : isHidden;

        if (shouldShow) {
            sidebar.classList.remove('-translate-x-full');
            if (sidebarOverlay) sidebarOverlay.classList.remove('hidden');
            if (sidebarToggle) sidebarToggle.setAttribute('aria-expanded', 'true');
        } else {
            sidebar.classList.add('-translate-x-full');
            if (sidebarOverlay) sidebarOverlay.classList.add('hidden');
            if (sidebarToggle) sidebarToggle.setAttribute('aria-expanded', 'false');
        }
    };

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', () => toggleSidebar());
    }

    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', () => toggleSidebar(false));
    }

    // Auto-hide flash notification toasts after 5 seconds
    const flashMessages = document.querySelectorAll('.flash-toast');
    flashMessages.forEach((toast) => {
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transition = 'opacity 0.5s ease';
            setTimeout(() => toast.remove(), 500);
        }, 5000);
    });
});

