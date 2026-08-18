<?php
/**
 * System Notifications & Alerts Page
 * Department of Christian Religious Affairs
 * Free of Charge Medical Letter Issuing System
 */

$page_title = "Notifications & Alerts";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Buttons -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Notifications</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">System Notifications &amp; Alerts</h2>
            </div>
            <div class="flex items-center gap-3">
                <button type="button" id="btn-mark-all-read" class="border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold font-heading px-4 py-2.5 rounded-lg shadow-2xs flex items-center gap-2 transition-all cursor-pointer min-h-[40px]">
                    <svg class="w-4 h-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    Mark All as Read
                </button>
                <a href="<?= BASE_URL ?>settings" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold font-heading px-5 py-2.5 rounded-lg shadow-xs flex items-center justify-center gap-2 transition-all min-h-[40px] whitespace-nowrap cursor-pointer">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Settings
                </a>
            </div>
        </div>

        <!-- 4 Stat Summary Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Stat 1: Total Notifications -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">TOTAL NOTIFICATIONS</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">18</h3>
                    <p class="text-xs text-slate-500 font-medium font-inter mt-1.5">Last 30 days summary</p>
                </div>
            </div>

            <!-- Stat 2: Unread Alerts -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">UNREAD ALERTS</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2" id="unread-count-badge">4</h3>
                    <p class="text-xs text-amber-600 font-medium font-inter mt-1.5 flex items-center gap-1">
                        <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                        <span>Action required</span>
                    </p>
                </div>
            </div>

            <!-- Stat 3: High Priority -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">HIGH PRIORITY</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">2</h3>
                    <p class="text-xs text-slate-500 font-medium font-inter mt-1.5">Security &amp; Visa clearance</p>
                </div>
            </div>

            <!-- Stat 4: Activity Today -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">ACTIVITY LOGS TODAY</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">24</h3>
                    <p class="text-xs text-slate-500 font-medium font-inter mt-1.5">System operations logged</p>
                </div>
            </div>

        </div>

        <!-- Filter Tabs & Search Bar -->
        <div class="bg-white p-4 rounded-xl border border-slate-200/80 shadow-2xs flex flex-col md:flex-row md:items-center justify-between gap-4">
            
            <!-- Category Filter Tabs -->
            <div class="flex items-center gap-1.5 overflow-x-auto pb-1 md:pb-0 font-heading text-xs font-semibold">
                <button type="button" class="notif-tab active px-3.5 py-2 rounded-lg bg-primary text-white shadow-2xs transition-all cursor-pointer whitespace-nowrap" data-filter="all">
                    All Notifications (18)
                </button>
                <button type="button" class="notif-tab px-3.5 py-2 rounded-lg bg-slate-100 hover:bg-slate-200/70 text-slate-700 transition-all cursor-pointer whitespace-nowrap" data-filter="unread">
                    Unread (4)
                </button>
                <button type="button" class="notif-tab px-3.5 py-2 rounded-lg bg-slate-100 hover:bg-slate-200/70 text-slate-700 transition-all cursor-pointer whitespace-nowrap" data-filter="medical">
                    Medical Letters
                </button>
                <button type="button" class="notif-tab px-3.5 py-2 rounded-lg bg-slate-100 hover:bg-slate-200/70 text-slate-700 transition-all cursor-pointer whitespace-nowrap" data-filter="system">
                    System &amp; Security
                </button>
            </div>

            <!-- Search Bar -->
            <div class="relative w-full md:w-64">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" id="notif-search-query" placeholder="Filter alerts..." class="w-full pl-9 pr-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-slate-300 transition-all h-9">
            </div>

        </div>

        <!-- Master Notifications List Feed Card -->
        <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs overflow-hidden">
            <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Recent Notifications</h3>
                <span class="text-xs text-slate-400 font-inter">Updated in real-time</span>
            </div>

            <div class="divide-y divide-slate-100 font-inter text-xs" id="notifications-feed">
                
                <!-- Notification Item 1 (Unread - Medical) -->
                <div class="notif-item unread p-4 sm:p-5 hover:bg-slate-50/70 transition-colors flex items-start justify-between gap-4 bg-amber-50/15" data-category="medical" data-unread="true">
                    <div class="flex items-start space-x-3.5">
                        <div class="w-9 h-9 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center flex-shrink-0 mt-0.5 shadow-3xs">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h4 class="font-bold text-slate-900 text-sm">Medical Statement Approved &mdash; ML-2024-0043</h4>
                                <span class="w-2 h-2 rounded-full bg-primary flex-shrink-0"></span>
                                <span class="px-2 py-0.5 text-[9px] font-bold bg-emerald-100 text-emerald-800 rounded">Medical Letter</span>
                            </div>
                            <p class="text-slate-600 leading-normal">
                                Medical statement for <strong class="text-slate-800">Fr. Anthony Silva</strong> (Passport: GH2847391) has been approved by Health Services Division and is ready for print/download.
                            </p>
                            <p class="text-[11px] text-slate-400">Today &mdash; 14:31:55 &middot; System Auto-Generated</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2 flex-shrink-0">
                        <a href="<?= BASE_URL ?>new-medical-letter" class="text-xs font-bold font-heading text-primary hover:text-primary-dark px-3 py-1.5 bg-primary/10 rounded-lg transition-colors">
                            View Letter
                        </a>
                        <button type="button" class="btn-dismiss-notif p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-100 cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                </div>

                <!-- Notification Item 2 (Unread - System) -->
                <div class="notif-item unread p-4 sm:p-5 hover:bg-slate-50/70 transition-colors flex items-start justify-between gap-4 bg-amber-50/15" data-category="system" data-unread="true">
                    <div class="flex items-start space-x-3.5">
                        <div class="w-9 h-9 rounded-full bg-amber-100 text-amber-800 flex items-center justify-center flex-shrink-0 mt-0.5 shadow-3xs">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h4 class="font-bold text-slate-900 text-sm">Visa Recommendation Database Sync Complete</h4>
                                <span class="w-2 h-2 rounded-full bg-primary flex-shrink-0"></span>
                                <span class="px-2 py-0.5 text-[9px] font-bold bg-amber-100 text-amber-800 rounded">System Sync</span>
                            </div>
                            <p class="text-slate-600 leading-normal">
                                Automated nightly synchronization with Ministry of Buddhasasana Visa Recommendation database completed successfully with 42 updated records.
                            </p>
                            <p class="text-[11px] text-slate-400">Today &mdash; 08:15:00 &middot; Database Sync</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2 flex-shrink-0">
                        <button type="button" class="btn-dismiss-notif p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-100 cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                </div>

                <!-- Notification Item 3 (Unread - Medical) -->
                <div class="notif-item unread p-4 sm:p-5 hover:bg-slate-50/70 transition-colors flex items-start justify-between gap-4 bg-amber-50/15" data-category="medical" data-unread="true">
                    <div class="flex items-start space-x-3.5">
                        <div class="w-9 h-9 rounded-full bg-blue-100 text-blue-800 flex items-center justify-center flex-shrink-0 mt-0.5 shadow-3xs">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h4 class="font-bold text-slate-900 text-sm">New Applicant Search Activity</h4>
                                <span class="w-2 h-2 rounded-full bg-primary flex-shrink-0"></span>
                                <span class="px-2 py-0.5 text-[9px] font-bold bg-blue-100 text-blue-800 rounded">Search Log</span>
                            </div>
                            <p class="text-slate-600 leading-normal">
                                Passport search query <strong class="text-slate-800 font-mono">AB1234567</strong> performed by Admin User.
                            </p>
                            <p class="text-[11px] text-slate-400">Today &mdash; 14:31:33 &middot; Staff Portal Log</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2 flex-shrink-0">
                        <button type="button" class="btn-dismiss-notif p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-100 cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                </div>

                <!-- Notification Item 4 (Unread - System) -->
                <div class="notif-item unread p-4 sm:p-5 hover:bg-slate-50/70 transition-colors flex items-start justify-between gap-4 bg-amber-50/15" data-category="system" data-unread="true">
                    <div class="flex items-start space-x-3.5">
                        <div class="w-9 h-9 rounded-full bg-[#102033] text-white flex items-center justify-center flex-shrink-0 mt-0.5 shadow-3xs">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h4 class="font-bold text-slate-900 text-sm">Security Clearance Confirmed &mdash; Ministry of Defence</h4>
                                <span class="w-2 h-2 rounded-full bg-primary flex-shrink-0"></span>
                                <span class="px-2 py-0.5 text-[9px] font-bold bg-slate-900 text-white rounded">Security Clearance</span>
                            </div>
                            <p class="text-slate-600 leading-normal">
                                Security clearance batch #MOD-2026-088 for 12 priesthood visa applicants verified and archived.
                            </p>
                            <p class="text-[11px] text-slate-400">Yesterday &mdash; 16:45:00 &middot; Ministry Clearance</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2 flex-shrink-0">
                        <button type="button" class="btn-dismiss-notif p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-100 cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                </div>

                <!-- Notification Item 5 (Read - Medical) -->
                <div class="notif-item p-4 sm:p-5 hover:bg-slate-50/70 transition-colors flex items-start justify-between gap-4" data-category="medical" data-unread="false">
                    <div class="flex items-start space-x-3.5">
                        <div class="w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h4 class="font-bold text-slate-800 text-sm">Medical Letter Printed &mdash; ML-2024-0041</h4>
                                <span class="px-2 py-0.5 text-[9px] font-bold bg-slate-100 text-slate-600 rounded">Printed</span>
                            </div>
                            <p class="text-slate-600 leading-normal">
                                Official statement for <strong class="text-slate-800">John Doe</strong> printed by Health Services Division staff.
                            </p>
                            <p class="text-[11px] text-slate-400">24 Mar 2026 &middot; 11:20:15</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2 flex-shrink-0">
                        <button type="button" class="btn-dismiss-notif p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-100 cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

<!-- Interactive Script for Notifications Filtering -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.notif-tab');
    const items = document.querySelectorAll('.notif-item');
    const searchInput = document.getElementById('notif-search-query');
    const btnMarkAllRead = document.getElementById('btn-mark-all-read');
    const unreadBadge = document.getElementById('unread-count-badge');

    let currentFilter = 'all';

    function filterItems() {
        const query = searchInput.value.toLowerCase().trim();

        items.forEach(item => {
            const cat = item.getAttribute('data-category');
            const isUnread = item.getAttribute('data-unread') === 'true';
            const text = item.textContent.toLowerCase();

            let matchesTab = false;
            if (currentFilter === 'all') matchesTab = true;
            else if (currentFilter === 'unread' && isUnread) matchesTab = true;
            else if (currentFilter === cat) matchesTab = true;

            let matchesSearch = text.includes(query);

            if (matchesTab && matchesSearch) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => {
                t.className = 'notif-tab px-3.5 py-2 rounded-lg bg-slate-100 hover:bg-slate-200/70 text-slate-700 transition-all cursor-pointer whitespace-nowrap';
            });
            tab.className = 'notif-tab active px-3.5 py-2 rounded-lg bg-primary text-white shadow-2xs transition-all cursor-pointer whitespace-nowrap';
            currentFilter = tab.getAttribute('data-filter');
            filterItems();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', filterItems);
    }

    if (btnMarkAllRead) {
        btnMarkAllRead.addEventListener('click', () => {
            document.querySelectorAll('.notif-item.unread').forEach(el => {
                el.classList.remove('bg-amber-50/15', 'unread');
                el.setAttribute('data-unread', 'false');
                const dot = el.querySelector('.bg-primary.w-2');
                if (dot) dot.remove();
            });
            if (unreadBadge) unreadBadge.textContent = '0';
            filterItems();
        });
    }

    document.querySelectorAll('.btn-dismiss-notif').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const item = e.target.closest('.notif-item');
            if (item) item.remove();
        });
    });
});
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
