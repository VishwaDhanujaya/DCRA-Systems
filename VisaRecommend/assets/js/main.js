/**
 * Department of Christian Religious Affairs
 * Visa Recommendation Letter Management System
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

    // Application Details Drawer Functionality
    const appDrawer = document.getElementById('application-drawer');
    const appDrawerOverlay = document.getElementById('application-drawer-overlay');
    const closeDrawerBtn = document.getElementById('close-drawer-btn');
    const closeDrawerBottomBtn = document.getElementById('close-drawer-bottom-btn');

    const openApplicationDrawer = (data = {}) => {
        if (!appDrawer || !appDrawerOverlay) return;

        // If custom data provided, populate fields
        if (data.id) {
            const visaIdEl = document.getElementById('drawer-visa-id');
            const nameEl = document.getElementById('drawer-applicant-name');
            const churchEl = document.getElementById('drawer-applicant-church');
            const detailNameEl = document.getElementById('drawer-detail-name');
            const visaTypeEl = document.getElementById('drawer-detail-visatype');
            const statusEl = document.getElementById('drawer-detail-status');

            const fullpageLink = document.getElementById('drawer-fullpage-link');

            if (visaIdEl) visaIdEl.textContent = `${data.visatype || 'Entry Visa'} · ${data.id}`;
            if (nameEl) nameEl.textContent = data.name || 'Fr. Anthony Silva';
            if (churchEl) churchEl.textContent = data.church || "St. Anthony's Church • Colombo Diocese";
            if (detailNameEl) detailNameEl.textContent = data.name || 'Fr. Anthony Silva';
            if (visaTypeEl) visaTypeEl.textContent = data.visatype || 'Entry Visa';
            if (statusEl) statusEl.textContent = data.status || 'MOD Review';
            if (fullpageLink) fullpageLink.href = `application-details?id=${encodeURIComponent(data.id)}`;
        }

        appDrawerOverlay.classList.remove('opacity-0', 'pointer-events-none');
        appDrawerOverlay.classList.add('opacity-100', 'pointer-events-auto');
        appDrawer.classList.remove('translate-x-full');
        appDrawer.classList.add('translate-x-0');
        document.body.classList.add('overflow-hidden');
    };

    const closeApplicationDrawer = () => {
        if (!appDrawer || !appDrawerOverlay) return;
        appDrawer.classList.remove('translate-x-0');
        appDrawer.classList.add('translate-x-full');
        appDrawerOverlay.classList.remove('opacity-100', 'pointer-events-auto');
        appDrawerOverlay.classList.add('opacity-0', 'pointer-events-none');
        document.body.classList.remove('overflow-hidden');
    };

    // Attach drawer open handlers to all rows and view buttons in tables
    const attachRowHandlers = () => {
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach((row) => {
            row.classList.add('cursor-pointer');
            row.addEventListener('click', (e) => {
                // If user clicked a direct link (like the 2nd document/folder button with href), let it navigate directly
                const targetLink = e.target.closest('a');
                if (targetLink && targetLink.getAttribute('href') && targetLink.getAttribute('href') !== '#') {
                    return; // Allow standard navigation to application-details.php
                }

                e.preventDefault();

                const cells = row.querySelectorAll('td');
                let data = {};

                if (cells.length >= 5) {
                    const idText = cells[0].textContent.trim();
                    const nameSpan = cells[1].querySelector('span.font-semibold') || cells[1];
                    const churchSpan = cells[1].querySelector('span.text-\\[11px\\]');
                    const visaTypeSpan = cells[2].querySelector('span') || cells[2];
                    const statusSpan = cells[4].querySelector('span') || cells[4];

                    data = {
                        id: idText,
                        name: nameSpan ? nameSpan.textContent.trim() : 'Fr. Anthony Silva',
                        church: churchSpan ? churchSpan.textContent.trim() : "St. Anthony's Church • Colombo Diocese",
                        visatype: visaTypeSpan ? visaTypeSpan.textContent.trim() : 'Entry Visa',
                        status: statusSpan ? statusSpan.textContent.replace('•', '').trim() : 'MOD Review'
                    };
                }

                openApplicationDrawer(data);
            });
        });
    };

    attachRowHandlers();

    if (closeDrawerBtn) closeDrawerBtn.addEventListener('click', closeApplicationDrawer);
    if (closeDrawerBottomBtn) closeDrawerBottomBtn.addEventListener('click', closeApplicationDrawer);
    if (appDrawerOverlay) appDrawerOverlay.addEventListener('click', closeApplicationDrawer);

    // Global Keydown (Escape to close drawer)
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeApplicationDrawer();
            toggleSidebar(false);
        }
    });

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
