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
                
                <a href="<?= BASE_URL ?>dashboard" <?= ($current_page === 'index.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'index.php') ? 'bg-primary text-white shadow-xs font-heading' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 opacity-90" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    Dashboard
                </a>
 
                <a href="<?= BASE_URL ?>applications" <?= ($current_page === 'applications.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'applications.php') ? 'bg-primary text-white shadow-xs font-heading' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 <?= ($current_page === 'applications.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Applications
                </a>
 
                <a href="<?= BASE_URL ?>approval" <?= ($current_page === 'approval.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'approval.php') ? 'bg-primary text-white shadow-xs font-heading' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 <?= ($current_page === 'approval.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Approvals
                </a>
 
                <a href="<?= BASE_URL ?>certificates" <?= ($current_page === 'certificates.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'certificates.php') ? 'bg-primary text-white shadow-xs font-heading' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 <?= ($current_page === 'certificates.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                    Certificates
                </a>
 
             </nav>
         </div>
 
         <!-- Category 2: DATA -->
         <div>
             <p class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest font-heading mb-2">DATA</p>
             <nav class="space-y-1">
                 <a href="<?= BASE_URL ?>reports" <?= ($current_page === 'reports.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'reports.php') ? 'bg-primary text-white shadow-xs font-heading' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                     <svg class="mr-3 h-4 w-4 <?= ($current_page === 'reports.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                     </svg>
                     Reports
                 </a>
 
                 <a href="<?= BASE_URL ?>archive" <?= ($current_page === 'archive.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'archive.php') ? 'bg-primary text-white shadow-xs font-heading' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                     <svg class="mr-3 h-4 w-4 <?= ($current_page === 'archive.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 012-2h10a2 2 0 012 2M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                     </svg>
                     Archive
                 </a>
            </nav>
        </div>

        <!-- Category 3: SYSTEM -->
        <div>
            <p class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest font-heading mb-2">SYSTEM</p>
            <nav class="space-y-1">
                <a href="<?= BASE_URL ?>settings" <?= ($current_page === 'settings.php') ? 'aria-current="page"' : '' ?> class="flex items-center min-h-[44px] px-3 py-2.5 text-xs font-semibold rounded-lg transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary/40 <?= ($current_page === 'settings.php') ? 'bg-primary text-white shadow-xs font-heading' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 font-inter' ?>">
                    <svg class="mr-3 h-4 w-4 <?= ($current_page === 'settings.php') ? 'opacity-90' : 'opacity-75' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Settings
                </a>

                <a href="<?= BASE_URL ?>logout" class="flex items-center px-3 py-2.5 text-xs font-semibold rounded-lg text-primary hover:bg-primary/10 focus:outline-none focus:ring-2 focus:ring-primary/40 font-heading transition-all duration-150">
                    <svg class="mr-3 h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Logout
                </a>
            </nav>
        </div>

    </div>
</aside>

