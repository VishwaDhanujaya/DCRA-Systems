<?php
/**
 * Staff Navigation Sidebar Component
 * Department of Christian Religious Affairs
 */

$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- Mobile Sidebar Backdrop Overlay -->
<div id="sidebar-overlay" class="fixed top-16 inset-x-0 bottom-0 bg-slate-950/60 backdrop-blur-sm z-30 hidden lg:hidden" aria-hidden="true"></div>

<aside id="app-sidebar" aria-label="Staff Portal Sidebar Navigation" class="w-60 bg-white border-r border-slate-200/80 text-slate-600 flex-shrink-0 transition-transform duration-200 ease-in-out transform lg:translate-x-0 -translate-x-full fixed top-16 bottom-0 left-0 z-40 lg:static lg:inset-y-0 flex flex-col justify-between shadow-[4px_0_15px_-3px_rgba(15,23,42,0.05)] overflow-y-auto">
    <div class="py-5 px-3 space-y-6">
        
        <!-- Category 1: MAIN -->
        <div>
            <p class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest font-heading mb-2">MAIN</p>
            <nav class="space-y-1">
                <!-- Dashboard (Active) -->
                <a href="<?= BASE_URL ?>dashboard" <?= ($current_page === 'index.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'index.php') ? 'bg-primary text-white shadow-xs font-inter' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 opacity-90" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    Dashboard
                </a>
 
                <!-- Booking Management -->
                <a href="<?= BASE_URL ?>booking-management" <?= ($current_page === 'booking-management.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'booking-management.php') ? 'bg-primary text-white shadow-xs font-inter' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 <?= ($current_page === 'booking-management.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                    </svg>
                    Booking Management
                </a>
 
                <!-- Member Management -->
                <a href="<?= BASE_URL ?>member-management" <?= ($current_page === 'member-management.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'member-management.php') ? 'bg-primary text-white shadow-xs font-inter' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 <?= ($current_page === 'member-management.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    Member Management
                </a>
 
                <!-- Payment Verification -->
                <a href="<?= BASE_URL ?>payment-verification" <?= ($current_page === 'payment-verification.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'payment-verification.php') ? 'bg-primary text-white shadow-xs font-inter' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 <?= ($current_page === 'payment-verification.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    Payment Verification
                </a>
 
                <!-- Resort Management -->
                <a href="<?= BASE_URL ?>resort-management" <?= ($current_page === 'resort-management.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'resort-management.php') ? 'bg-primary text-white shadow-xs font-inter' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 <?= ($current_page === 'resort-management.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Resort Management
                </a>
            </nav>
        </div>

        <!-- Category 2: DATA -->
        <div>
            <p class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest font-heading mb-2">DATA</p>
            <nav class="space-y-1">
                <!-- Reports -->
                <a href="<?= BASE_URL ?>reports" <?= ($current_page === 'reports.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'reports.php') ? 'bg-primary text-white shadow-xs font-inter' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 <?= ($current_page === 'reports.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Reports
                </a>

                <!-- Notifications -->
                <a href="<?= BASE_URL ?>notifications" <?= ($current_page === 'notifications.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'notifications.php') ? 'bg-primary text-white shadow-xs font-inter' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 <?= ($current_page === 'notifications.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    Notifications
                </a>
            </nav>
        </div>

        <!-- Category 3: SYSTEM -->
        <div>
            <p class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest font-heading mb-2">SYSTEM</p>
            <nav class="space-y-1">
                <!-- Settings -->
                <a href="<?= BASE_URL ?>settings" <?= ($current_page === 'settings.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'settings.php') ? 'bg-primary text-white shadow-xs font-inter' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 <?= ($current_page === 'settings.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Settings
                </a>

                <!-- Logout -->
                <a href="<?= BASE_URL ?>logout" class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg text-primary hover:bg-primary/10 focus:outline-none focus:ring-2 focus:ring-primary/40 font-inter transition-all duration-150 mt-2">
                    <svg class="mr-3 h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Logout
                </a>
            </nav>
        </div>


    </div>
</aside>
